<?php declare(strict_types = 1);

namespace MailPoet\Automation\Engine\Validation\WorkflowRules;

if (!defined('ABSPATH')) exit;


use MailPoet\Automation\Engine\Data\Step;
use MailPoet\Automation\Engine\Data\Workflow;
use MailPoet\Automation\Engine\Exceptions;
use MailPoet\Automation\Engine\Validation\WorkflowGraph\WorkflowNode;
use MailPoet\Automation\Engine\Validation\WorkflowGraph\WorkflowNodeVisitor;

class AtLeastOneTriggerRule implements WorkflowNodeVisitor {
  public const RULE_ID = 'at-least-one-trigger';

  /** @var bool */
  private $triggerFound = false;

  public function initialize(Workflow $workflow): void {
    $this->triggerFound = false;
  }

  public function visitNode(Workflow $workflow, WorkflowNode $node): void {
    if ($node->getStep()->getType() === Step::TYPE_TRIGGER) {
      $this->triggerFound = true;
    }
  }

  public function complete(Workflow $workflow): void {
    if ($this->triggerFound) {
      return;
    }
    throw Exceptions::workflowStructureNotValid(__('There must be at least one trigger in the workflow.', 'mailpoet'), self::RULE_ID);
  }
}
