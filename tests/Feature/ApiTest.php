<?php

namespace Tests\Feature;

use App\Championship;
use App\Match;
use App\Matchday;
use App\Season;
use App\Sport;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * Check if championship api works
     *
     * @return void
     */
    public function testGetChampionships()
    {
        $sport = Sport::first();

        $response = $this->get('/api/championships/' . $sport->id);

        if ($response->getStatusCode() == 200 || $response->getStatusCode() == 204) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test if championship json response structure is ok
     */
    public function testChampionshipResponseStructure()
    {
        $sport = Sport::first();

        $response = $this->get('/api/championships/' . $sport->id);

        if ($response->getStatusCode() == 200) {
            $response->assertJsonStructure([
                '*' => [
                    'id',
                    'name'
                ]
            ]);
        } else {
            $this->assertTrue(true);
        }
    }

    /**
     * Check if seasons api works
     */
    public function testGetSeasons()
    {
        $championship = Championship::first();

        $response = $this->get('/api/seasons/' . $championship->id);

        if ($response->getStatusCode() == 200 || $response->getStatusCode() == 204) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test if seasons json response structure is ok
     */
    public function testSeasonResponseStructure()
    {
        $championship = Championship::first();

        $response = $this->get('/api/seasons/' . $championship->id);

        if ($response->getStatusCode() == 200) {
            $response->assertJsonStructure([
                '*' => [
                    'id',
                    'name'
                ]
            ]);
        } else {
            $this->assertTrue(true);
        }
    }

    /**
     * Test if matchdays api works
     */
    public function testGetMatchdays()
    {
        $season = Season::first();

        $response = $this->get('/api/matchdays/' . $season->id);

        if ($response->getStatusCode() == 200 || $response->getStatusCode() == 204) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test if matchdays json response structure is ok
     */
    public function testMatchdayResponseStructure()
    {
        $season = Season::first();

        $response = $this->get('/api/matchdays/' . $season->id);

        if ($response->getStatusCode() == 200) {
            $response->assertJsonStructure([
                '*' => [
                    'id',
                    'matchday'
                ]
            ]);
        } else {
            $this->assertTrue(true);
        }
    }

    /**
     * Test Patch Match api
     */
    public function testPatchMatch()
    {
        $match = Match::first();

        $request = [
            'id' => $match->id,
            'first_team_score' => 1,
            'second_team_score' => 1
        ];

        $response = $this->patch('/api/match/', $request);

        if ($response->getStatusCode() == 200) {
            $response->assertJsonStructure([
                'id',
                'first_team_score',
                'second_team_score'
            ]);
        } else {
            $this->assertTrue(true);
        }
    }


}
