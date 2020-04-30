<?php

namespace Queueworker\NoDaemon;

use Illuminate\Queue\Worker;
use Illuminate\Queue\WorkerOptions;

class NoDaemonWorker extends Worker
{
    /**
     * Get the next job from the queue connection.
     *
     * @param  \Illuminate\Contracts\Queue\Queue  $connection
     * @param  string  $queue
     * @return \Illuminate\Contracts\Queue\Job|null
     */
    public function getNextNoDaemonJob($connection, $queue)
    {
        return $this->getNextJob($connection, $queue);
    }

    /**
     * Process the given job.
     *
     * @param  \Illuminate\Contracts\Queue\Job  $job
     * @param  string  $connectionName
     * @param  \Illuminate\Queue\WorkerOptions  $options
     * @return void
     */
    public function runNoDaemonJob($job, $connectionName, WorkerOptions $options)
    {
        return $this->runJob($job, $connectionName, $options);
    }
}
