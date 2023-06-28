<?php

namespace App\Services;

use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Repositories\SupportRepositoryInterface;
use stdClass;

class SupportService
{

    public function __construct(
        protected SupportRepositoryInterface $repository
    ) {
    }

    public function paginate(
        string $filter = null,
        int $page = 1,
        int $totalPerPage = 15,
    ) {

        return $this->repository->paginate(page: $page, totalPerPage: $totalPerPage, filter: $filter);
    }

    public function getAll(string $filter = null): array
    {

        return $this->repository->getAll($filter);
    }

    public function getSingle(string $id): stdClass|null
    {
        return $this->repository->getSingle($id);
    }

    public function new(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(
        UpdateSupportDTO $dto
    ): stdClass|null {
        return $this->repository->update($dto);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
}
