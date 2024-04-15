<?php

use Kayschima\TischtennisLive\TischtennisLive;

it('constructs the class by valid teams and competitions', function () {
    $tischtennis_live = new TischtennisLive(
        'https://segeberg.tischtennislive.de/',
        113261,
        17846,
        2
    );

    expect($tischtennis_live->getXmlImport())->not->toBeEmpty();
});
