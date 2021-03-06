<?php

namespace JasonRoman\NbaApi\Request\Data\MobileTeams\Game;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\Data\LeagueSlugParam;
use JasonRoman\NbaApi\Params\FormatParam;
use JasonRoman\NbaApi\Params\GameIdParam;
use JasonRoman\NbaApi\Request\Data\MobileTeams\AbstractDataMobileTeamsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get the full play-by-play of a game. This does not restrict per period.
 */
class FullPlayByPlayRequest extends AbstractDataMobileTeamsRequest
{
    const ENDPOINT = '/v2015/{format}/mobile_teams/{leagueSlug}/{year}/scores/pbp/{gameId}_full_pbp.{format}';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(FormatParam::OPTIONS)
     *
     * @var string
     */
    public $format;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LeagueSlugParam::OPTIONS)
     *
     * @var string
     */
    public $leagueSlug;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2016)
     *
     * @var int
     */
    public $year;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(GameIdParam::FORMAT)
     *
     * @var string
     */
    public $gameId;
}