<?php

/**
 * @file
 * Contains \Drupal\redis\Queue\ReliableQueueBase.
 */

namespace Drupal\redis\Queue;

use Drupal\Core\Queue\ReliableQueueInterface;

/**
 * Redis queue implementation.
 *
 * @ingroup queue
 */
abstract class ReliableQueueBase extends QueueBase implements ReliableQueueInterface {

}
