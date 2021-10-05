<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDokumen_ProposalRequest;
use App\Http\Requests\UpdateDokumen_ProposalRequest;
use App\Repositories\Dokumen_ProposalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Dokumen_ProposalController extends AppBaseController
{
    /** @var  Dokumen_ProposalRepository */
    private $dokumenProposalRepository;

    public function __construct(Dokumen_ProposalRepository $dokumenProposalRepo)
    {
        $this->dokumenProposalRepository = $dokumenProposalRepo;
    }

    /**
     * Display a listing of the Dokumen_Proposal.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dokumenProposals = $this->dokumenProposalRepository->all();

        return view('dokumen__proposals.index')
            ->with('dokumenProposals', $dokumenProposals);
    }

    /**
     * Show the form for creating a new Dokumen_Proposal.
     *
     * @return Response
     */
    public function create()
    {
        return view('dokumen__proposals.create');
    }

    /**
     * Store a newly created Dokumen_Proposal in storage.
     *
     * @param CreateDokumen_ProposalRequest $request
     *
     * @return Response
     */
    public function store(CreateDokumen_ProposalRequest $request)
    {
        $input = $request->all();

        $dokumenProposal = $this->dokumenProposalRepository->create($input);

        Flash::success('Dokumen  Proposal saved successfully.');

        return redirect(route('dokumenProposals.index'));
    }

    /**
     * Display the specified Dokumen_Proposal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            Flash::error('Dokumen  Proposal not found');

            return redirect(route('dokumenProposals.index'));
        }

        return view('dokumen__proposals.show')->with('dokumenProposal', $dokumenProposal);
    }

    /**
     * Show the form for editing the specified Dokumen_Proposal.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            Flash::error('Dokumen  Proposal not found');

            return redirect(route('dokumenProposals.index'));
        }

        return view('dokumen__proposals.edit')->with('dokumenProposal', $dokumenProposal);
    }

    /**
     * Update the specified Dokumen_Proposal in storage.
     *
     * @param int $id
     * @param UpdateDokumen_ProposalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDokumen_ProposalRequest $request)
    {
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            Flash::error('Dokumen  Proposal not found');

            return redirect(route('dokumenProposals.index'));
        }

        $dokumenProposal = $this->dokumenProposalRepository->update($request->all(), $id);

        Flash::success('Dokumen  Proposal updated successfully.');

        return redirect(route('dokumenProposals.index'));
    }

    /**
     * Remove the specified Dokumen_Proposal from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dokumenProposal = $this->dokumenProposalRepository->find($id);

        if (empty($dokumenProposal)) {
            Flash::error('Dokumen  Proposal not found');

            return redirect(route('dokumenProposals.index'));
        }

        $this->dokumenProposalRepository->delete($id);

        Flash::success('Dokumen  Proposal deleted successfully.');

        return redirect(route('dokumenProposals.index'));
    }
}
