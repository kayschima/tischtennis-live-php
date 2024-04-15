<?php

namespace Kayschima\TischtennisLive;

class TischtennisLive
{
    private string $xmlImport;

    public function __construct(string $baseurl, int $teamId, int $wettbewerbId, int $runde)
    {
        $this->xmlImport = file_get_contents(
            $baseurl.
            '/Export/default.aspx'.
            '?TeamID='.$teamId.
            '&WettID='.$wettbewerbId.
            '&Runde='.$runde.
            '&SportArt=96&Area=TeamReport&Format=XML');
    }

    public function getXmlImport(): string
    {
        return $this->xmlImport;
    }

    private function convertXmlToArray(): array
    {
        return json_decode(
            json_encode(
                simplexml_load_string($this->xmlImport)
            ), true);
    }

    public function tabelle(): ?array
    {
        return $this->convertXmlToArray()['Content']['Tabelle']['Mannschaft'];
    }

    public function spielplan(): ?array
    {
        return $this->convertXmlToArray()['Content']['Spielplan'];
    }

    public function bilanz(): ?array
    {
        return $this->convertXmlToArray()['Content']['Bilanz'];
    }

    public function alleInformationen(): ?array
    {
        return $this->convertXmlToArray();
    }
}
