<?php namespace Tests\Repositories;

use App\Models\Dokumen_Proposal;
use App\Repositories\Dokumen_ProposalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class Dokumen_ProposalRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var Dokumen_ProposalRepository
     */
    protected $dokumenProposalRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->dokumenProposalRepo = \App::make(Dokumen_ProposalRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->make()->toArray();

        $createdDokumen_Proposal = $this->dokumenProposalRepo->create($dokumenProposal);

        $createdDokumen_Proposal = $createdDokumen_Proposal->toArray();
        $this->assertArrayHasKey('id', $createdDokumen_Proposal);
        $this->assertNotNull($createdDokumen_Proposal['id'], 'Created Dokumen_Proposal must have id specified');
        $this->assertNotNull(Dokumen_Proposal::find($createdDokumen_Proposal['id']), 'Dokumen_Proposal with given id must be in DB');
        $this->assertModelData($dokumenProposal, $createdDokumen_Proposal);
    }

    /**
     * @test read
     */
    public function test_read_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->create();

        $dbDokumen_Proposal = $this->dokumenProposalRepo->find($dokumenProposal->id);

        $dbDokumen_Proposal = $dbDokumen_Proposal->toArray();
        $this->assertModelData($dokumenProposal->toArray(), $dbDokumen_Proposal);
    }

    /**
     * @test update
     */
    public function test_update_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->create();
        $fakeDokumen_Proposal = Dokumen_Proposal::factory()->make()->toArray();

        $updatedDokumen_Proposal = $this->dokumenProposalRepo->update($fakeDokumen_Proposal, $dokumenProposal->id);

        $this->assertModelData($fakeDokumen_Proposal, $updatedDokumen_Proposal->toArray());
        $dbDokumen_Proposal = $this->dokumenProposalRepo->find($dokumenProposal->id);
        $this->assertModelData($fakeDokumen_Proposal, $dbDokumen_Proposal->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->create();

        $resp = $this->dokumenProposalRepo->delete($dokumenProposal->id);

        $this->assertTrue($resp);
        $this->assertNull(Dokumen_Proposal::find($dokumenProposal->id), 'Dokumen_Proposal should not exist in DB');
    }
}
