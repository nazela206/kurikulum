<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDokumen_ProposalAPIRequest;
use App\Http\Requests\API\UpdateDokumen_ProposalAPIRequest;
use App\Models\Dokumen_Proposal;
use App\Repositories\Dokumen_ProposalRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Dokumen_ProposalController
 * @package App\Http\Controllers\API
 */

class Dokumen_ProposalAPIController extends AppBaseController
{
    /** @var  Dokumen_ProposalRepository */
    private $dokumenProposalRepository;

    public function __construct(Dokumen_ProposalRepository $dokumenProposalRepo)
    {
        $this->dokumenProposalRepository = $dokumenProposalRepo;
    }

    /**
     * Display a listing of the Dokumen_Proposal.
     * GET|HEAD /dokumenProposals
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $dokumenProposals = $this->dokumenProposalRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($dokumenProposals->toArray(), 'Dokumen  Proposals retrieved successfully');
    }

    /**
     * Store a newly created Dokumen_Proposal in storage.
     * POST /dokumenProposals
     *
     * @param CreateDokumen_ProposalAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDokumen_ProposalAPIRequest $request)
    {
        $input = $request->all();

        $dokumenProposal = $this->dokumenProposalRepository->create($input);

        return $this->sendResponse($dokumenProposal->toArray(), 'Dokumen  Proposal saved successfully');
    }

    /**
     * Display the specified Dokumen_Proposal.
     * GET|HEAD /dokumenProposals/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Dokumen_Proposal $dokumenProposal */
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            return $this->sendError('Dokumen  Proposal not found');
        }

        return $this->sendResponse($dokumenProposal->toArray(), 'Dokumen  Proposal retrieved successfully');
    }

    /**
     * Update the specified Dokumen_Proposal in storage.
     * PUT/PATCH /dokumenProposals/{id}
     *
     * @param int $id
     * @param UpdateDokumen_ProposalAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDokumen_ProposalAPIRequest $request)
    {
        $input = $request->all();

        /** @var Dokumen_Proposal $dokumenProposal */
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            return $this->sendError('Dokumen  Proposal not found');
        }

        $dokumenProposal = $this->dokumenProposalRepository->update($input, $id);

        return $this->sendResponse($dokumenProposal->toArray(), 'Dokumen_Proposal updated successfully');
    }

    /**
     * Remove the specified Dokumen_Proposal from storage.
     * DELETE /dokumenProposals/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Dokumen_Proposal $dokumenProposal */
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            return $this->sendError('Dokumen  Proposal not found');
        }

        $dokumenProposal->delete();

        return $this->sendSuccess('Dokumen  Proposal deleted successfully');
    }
}
