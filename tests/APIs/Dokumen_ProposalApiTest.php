<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Dokumen_Proposal;

class Dokumen_ProposalApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/dokumen__proposals', $dokumenProposal
        );

        $this->assertApiResponse($dokumenProposal);
    }

    /**
     * @test
     */
    public function test_read_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/dokumen__proposals/'.$dokumenProposal->id
        );

        $this->assertApiResponse($dokumenProposal->toArray());
    }

    /**
     * @test
     */
    public function test_update_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->create();
        $editedDokumen_Proposal = Dokumen_Proposal::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/dokumen__proposals/'.$dokumenProposal->id,
            $editedDokumen_Proposal
        );

        $this->assertApiResponse($editedDokumen_Proposal);
    }

    /**
     * @test
     */
    public function test_delete_dokumen__proposal()
    {
        $dokumenProposal = Dokumen_Proposal::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/dokumen__proposals/'.$dokumenProposal->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/dokumen__proposals/'.$dokumenProposal->id
        );

        $this->response->assertStatus(404);
    }
}
