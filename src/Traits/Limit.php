<?php

namespace Daaner\NovaPoshta\Traits;

trait Limit
{
    protected string $limit;
    protected string $page;

    /**
     * @param string $limit
     * @return $this
     */
    public function setLimit(string $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $page
     * @return $this
     */
    public function setPage(string $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return void
     */
    public function getLimit(): void
    {
        if ($this->limit) {
            $this->methodProperties['Limit'] = $this->limit;
        }
    }

    /**
     * @return void
     */
    public function getPage(): void
    {
        if ($this->page) {
            $this->methodProperties['Page'] = $this->page;
        }
    }
}
