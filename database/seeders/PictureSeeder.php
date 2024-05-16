<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{

    private $pictures =[
        ['path' => 'nikeDuksericaEssentials1.jpg'],
        ['path' => 'nikeDuksericaEssentials2.jpg'],
        ['path' => 'nikeDuksericaSportsWearEssentials1.jpg'],
        ['path' => 'nikeDuksericaSportsWearEssentials2.jpg'],
        ['path' => 'nikeDuksericaNSWKeepItClean1.jpg'],
        ['path' => 'nikeDuksericaNSWKeepItClean2.jpg'],
        ['path' => 'nikeDuksericaOGBlack1.jpg'],
        ['path' => 'nikeDuksericaOGBlack2.jpg'],
        ['path' => 'nikeDuksericaThcFlcOrangeCrw1.jpg'],
        ['path' => 'nikeDuksericaThcFlcOrangeCrw2.jpg'],
        ['path' => 'adidasDuksericaBehindeTrefoil1.jpg'],
        ['path' => 'adidasDuksericaBehindeTrefoil2.jpg'],
        ['path' => 'nikeDuksericaJordanXPsg1.jpg'],
        ['path' => 'nikeDuksericaJordanXPsg2.jpg'],
        ['path' => 'nikeHolographicJumpman1.jpg'],
        ['path' => 'nikeHolographicJumpman2.jpg'],
        ['path' => 'adidasDuksericaAdiColorClassics1.jpg'],
        ['path' => 'adidasDuksericaAdiColorClassics2.jpg'],
        ['path' => 'adidasDuksericaAlien1.jpg'],
        ['path' => 'adidasDuksericaAlien2.jpg'],
        ['path' => 'nikeDuksericaPsgStatement1.jpg'],
        ['path' => 'nikeDuksericaPsgStatement2.jpg'],
        ['path' => 'nikeDuksericaTechTeal1.jpg'],
        ['path' => 'nikeDuksericaTechTeal2.jpg'],
        ['path' => 'nikeDuksericaTechFleeceCrimson1.jpg'],
        ['path' => 'nikeDuksericaTechFleeceCrimson2.jpg'],
        ['path' => 'nikeDuksericaJordanSportDna1.jpg'],
        ['path' => 'nikeDuksericaJordanSportDna2.jpg'],
        ['path' => 'championDuksericaColorBlocked1.jpg'],
        ['path' => 'championDuksericaColorBlocked2.jpg'],
        ['path' => 'nikeDuksericaSportsWearCityMade1.jpg'],
        ['path' => 'nikeDuksericaSportsWearCityMade2.jpg'],
        ['path' => 'napapijriDuksericaBerber1.jpg'],
        ['path' => 'napapijriDuksericaBerber2.jpg'],
        ['path' => 'tnfDuksericaStandardBlack1.jpg'],
        ['path' => 'tnfDuksericaStandardBlack2.jpg'],
        ['path' => 'tnfDuksericaStandardNavyBlue1.jpg'],
        ['path' => 'tnfDuksericaStandardNavyBlue2.jpg'],
        ['path' => 'napapijriDuksericaRoen1.jpg'],
        ['path' => 'napapijriDuksericaRoen2.jpg'],
        ['path' => 'pumaDuksericaBrito1.jpg'],
        ['path' => 'pumaDuksericaBrito2.jpg'],
        ['path' => 'championDuksericaYellowHood1.jpg'],
        ['path' => 'championDuksericaYellowHood2.jpg'],
        ['path' => 'adidasDuksericaRyv1.jpg'],
        ['path' => 'adidasDuksericaRyv2.jpg'],
        ['path' => 'adidasDuksericaFloral1.jpg'],
        ['path' => 'adidasDuksericaFloral2.jpg'],
        ['path' => 'napapijriDuksericaBurgee1.jpg'],
        ['path' => 'napapijriDuksericaBurgee2.jpg'],
        ['path' => 'nikeDuksericaNswTchFlsEssLsTopTlnk1.jpg'],
        ['path' => 'nikeDuksericaNswTchFlsEssLsTopTlnk2.jpg'],
        ['path' => 'adidasDuksericaDisneyBambi1.jpg'],
        ['path' => 'adidasDuksericaDisneyBambi2.jpg'],
        ['path' => 'nikeDuksericaGreenEssential1.jpg'],
        ['path' => 'nikeDuksericaGreenEssential2.jpg'],
        ['path' => 'nikeDuksericaTechFleeceBabyPink1.jpg'],
        ['path' => 'nikeDuksericaTechFleeceBabyPink2.jpg'],
        ['path' => 'nikeDuksericaOgPinkyCrewNeck1.jpg'],
        ['path' => 'nikeDuksericaOgPinkyCrewNeck2.jpg'],
        ['path' => 'adidasDuksericaAdicolorEssentials1.jpg'],
        ['path' => 'adidasDuksericaAdicolorEssentials2.jpg'],
        ['path' => 'tnfDuksericaStandardOrange1.jpg'],
        ['path' => 'tnfDuksericaStandardOrange2.jpg'],
        ['path' => 'tnfDuksericaStandardWhite1.jpg'],
        ['path' => 'tnfDuksericaStandardWhite2.jpg'],
        ['path' => 'championDuksericaPatternCrewneckPurple1.jpg'],
        ['path' => 'championDuksericaPatternCrewneckPurple2.jpg'],
        ['path' => 'championDuksericaOgCrewneckBlack1.jpg'],
        ['path' => 'championDuksericaOgCrewneckBlack2.jpg'],
        ['path' => 'championDuksericaPinkyHoody1.jpg'],
        ['path' => 'championDuksericaPinkyHoody2.jpg'],
        ['path' => 'nikeDuksericaJordanEssentialsBoxy1.jpg'],
        ['path' => 'nikeDuksericaJordanEssentialsBoxy2.jpg'],
        ['path' => 'nikeDuksericaNswTchFlcBrushed1.jpg'],
        ['path' => 'nikeDuksericaNswTchFlcBrushed2.jpg'],
        ['path' => 'nikeDuksericaJDgJordanBoxyPo1.jpg'],
        ['path' => 'nikeDuksericaJDgJordanBoxyPo2.jpg'],
        ['path' => 'nikeDuksericaTechFleeceBlockedColor1.jpg'],
        ['path' => 'nikeDuksericaEssentials1.jpg'],
        ['path' => 'nikeDuksericaTechFleeceBlockedColor2.jpg'],
        ['path' => 'pumaDuksericaSummerRoar1.jpg'],
        ['path' => 'pumaDuksericaSummerRoar2.jpg'],
        ['path' => 'adidasDuksericaDinoPack1.jpg'],
        ['path' => 'adidasDuksericaDinoPack2.jpg'],
        ['path' => 'nikeDuksericaBlackTreeBack1.jpg'],
        ['path' => 'nikeDuksericaBlackTreeBack2.jpg'],
        ['path' => 'adidasGornjiDeoAdicolorSst1.jpg'],
        ['path' => 'adidasGornjiDeoAdicolorSst2.jpg'],
        ['path' => 'adidasGornjiDeoSimpsonsFirebird1.jpg'],
        ['path' => 'adidasGornjiDeoSimpsonsFirebird2.jpg'],
        ['path' => 'adidasGornjiDeoMarimekkoFirebird1.jpg'],
        ['path' => 'adidasGornjiDeoMarimekkoFirebird2.jpg'],
        ['path' => 'adidasGornjiDeoOgLoose1.jpg'],
        ['path' => 'adidasGornjiDeoOgLoose2.jpg'],
        ['path' => 'adidasGornjiDeoStudioLondon1.jpg'],
        ['path' => 'adidasGornjiDeoStudioLondon2.jpg'],
        ['path' => 'nikeDonjiDeoUnlinedUtility1.jpg'],
        ['path' => 'nikeDonjiDeoUnlinedUtility2.jpg'],
        ['path' => 'adidasDonjiDeoAdicolorSst1.jpg'],
        ['path' => 'adidasDonjiDeoAdicolorSst2.jpg'],
        ['path' => 'nikeDonjiDeoSportDna1.jpg'],
        ['path' => 'nikeDonjiDeoSportDna2.jpg'],
        ['path' => 'pumaDonjiDeoBritto1.jpg'],
        ['path' => 'pumaDonjiDeoBritto2.jpg'],
        ['path' => 'nikeDonjiDeoSkateSb1.jpg'],
        ['path' => 'nikeDonjiDeoSkateSb2.jpg'],
        ['path' => 'nikeDonjiDeoSimpsonsFirebird1.jpg'],
        ['path' => 'nikeDonjiDeoSimpsonsFirebird2.jpg'],
        ['path' => 'adidasDonjiDeoTrackPant1.jpg'],
        ['path' => 'adidasDonjiDeoTrackPant2.jpg'],
        ['path' => 'nikeDonjiDeoEssentialCollection1.jpg'],
        ['path' => 'nikeDonjiDeoEssentialCollection2.jpg'],
        ['path' => 'nikeDonjiDeoEssentialFleece1.jpg'],
        ['path' => 'nikeDonjiDeoEssentialFleece2.jpg'],
        ['path' => 'adidasDonjiDeoAdicolorRedTrackPants1.jpg'],
        ['path' => 'adidasDonjiDeoAdicolorRedTrackPants2.jpg'],
        ['path' => 'adidasDonjiDeoOgLoose1.jpg'],
        ['path' => 'adidasDonjiDeoOgLoose2.jpg'],
        ['path' => 'adidasDonjiDeoMarimekkoFirebird1.jpg'],
        ['path' => 'adidasDonjiDeoMarimekkoFirebird2.jpg'],
        ['path' => 'nikeDonjiDeoJordanEssential1.jpg'],
        ['path' => 'nikeDonjiDeoJordanEssential2.jpg'],
        ['path' => 'adidasDonjiDeoAdicolorClassic1.jpg'],
        ['path' => 'adidasDonjiDeoAdicolorClassic2.jpg'],
        ['path' => 'nikeDonjiDeoJordanColorOutsideLines1.jpg'],
        ['path' => 'nikeDonjiDeoJordanColorOutsideLines2.jpg'],
        ['path' => 'nikeDonjiDeoTechFleece1.jpg'],
        ['path' => 'nikeDonjiDeoTechFleece2.jpg'],
        ['path' => 'nikePrslukJumpmanGoldenYear1.jpg'],
        ['path' => 'nikePrslukJumpmanGoldenYear2.jpg'],
        ['path' => 'adidasPrslukPuffer1.jpg'],
        ['path' => 'adidasPrslukPuffer2.jpg'],
        ['path' => 'nikePrslukJumpman23Enginereed1.jpg'],
        ['path' => 'nikePrslukJumpman23Enginereed2.jpg'],
        ['path' => 'nikeJaknaSportswearEssential1.jpg'],
        ['path' => 'nikeJaknaSportswearEssential2.jpg'],
        ['path' => 'nikeJaknaCoreParka1.jpg'],
        ['path' => 'nikeJaknaCoreParka2.jpg'],
        ['path' => 'adidasSuskavacVarsity1.jpg'],
        ['path' => 'adidasSuskavacVarsity2.jpg'],
        ['path' => 'adidasJaknaMarimekko1.jpg'],
        ['path' => 'adidasJaknaMarimekko2.jpg'],
        ['path' => 'nikeJaknaSportswearEssentialClassic1.jpg'],
        ['path' => 'nikeJaknaSportswearEssentialClassic2.jpg'],
        ['path' => 'nikeJaknaNswHe1.jpg'],
        ['path' => 'nikeJaknaNswHe2.jpg'],
        ['path' => 'tnfJaknaRetro1.jpg'],
        ['path' => 'tnfJaknaRetro2.jpg'],
        ['path' => 'tnfJaknaHymalayan1.jpg'],
        ['path' => 'tnfJaknaHymalayan2.jpg'],
        ['path' => 'napapijriJaknaRainforestMercury1.jpg'],
        ['path' => 'napapijriJaknaRainforestMercury2.jpg'],
        ['path' => 'tnfJaknaPinecroft1.jpg'],
        ['path' => 'tnfJaknaPinecroft2.jpg'],
        ['path' => 'adidasJaknaGraphicBehindTheTrefoil1.jpg'],
        ['path' => 'adidasJaknaGraphicBehindTheTrefoil2.jpg'],
        ['path' => 'nikeJaknaJordanEssentialsPuffer1.jpg'],
        ['path' => 'nikeJaknaJordanEssentialsPuffer2.jpg'],
        ['path' => 'nikeMajicaLunarGraphicTee1.jpg'],
        ['path' => 'nikeMajicaLunarGraphicTee2.jpg'],
        ['path' => 'nikeMajicaBurgerGraphicTee1.jpg'],
        ['path' => 'nikeMajicaBurgerGraphicTee2.jpg'],
        ['path' => 'napapijriMajicaSalisBanana1.jpg'],
        ['path' => 'napapijriMajicaSalisBanana2.jpg'],
        ['path' => 'nikeMajicaJordanFlight1.jpg'],
        ['path' => 'nikeMajicaJordanFlight2.jpg'],
        ['path' => 'pumaMajicaSwXP1.jpg'],
        ['path' => 'pumaMajicaSwXP2.jpg'],
        ['path' => 'nikeMajicaJumpmanBackMonographic1.jpg'],
        ['path' => 'nikeMajicaJumpmanBackMonographic2.jpg'],
        ['path' => 'nikeMajicaJumpman3D1.jpg'],
        ['path' => 'nikeMajicaJumpman3D2.jpg'],
        ['path' => 'adidasMajicaGraphicCamo1.jpg'],
        ['path' => 'adidasMajicaGraphicCamo2.jpg'],
        ['path' => 'adidasMajicaOriginalsForever1.jpg'],
        ['path' => 'adidasMajicaOriginalsForever2.jpg'],
        ['path' => 'adidasMajicaStokedAlien1.jpg'],
        ['path' => 'adidasMajicaStokedAlien2.jpg'],
        ['path' => 'tnfMajicaStandardYellow1.jpg'],
        ['path' => 'tnfMajicaStandardYellow2.jpg'],
        ['path' => 'pumaMajicaRibbedTee1.jpg'],
        ['path' => 'pumaMajicaRibbedTee2.jpg'],
        ['path' => 'adidasMajicaAlwaysOriginal1.jpg'],
        ['path' => 'adidasMajicaAlwaysOriginal2.jpg'],
        ['path' => 'adidasMajicaBambiDeer1.jpg'],
        ['path' => 'adidasMajicaBambiDeer2.jpg'],
        ['path' => 'nikeMajicaSportswearEssentialOrange1.jpg'],
        ['path' => 'nikeMajicaSportswearEssentialOrange2.jpg'],
        ['path' => 'tnfMajicaEasy1.jpg'],
        ['path' => 'tnfMajicaEasy2.jpg'],
        ['path' => 'nikeMajicaOgTeeCropped1.jpg'],
        ['path' => 'nikeMajicaOgTeeCropped2.jpg'],
        ['path' => 'championMajicaMilanoBack1.jpg'],
        ['path' => 'championMajicaMilanoBack2.jpg'],
        ['path' => 'nikeMajicaFuturaBoxy1.jpg'],
        ['path' => 'nikeMajicaFuturaBoxy2.jpg'],
        ['path' => 'nikeMajicaJumpman3DKids1.jpg'],
        ['path' => 'nikeMajicaJumpman3DKids2.jpg'],
        ['path' => 'adidasMajicaMickyMouse1.jpg'],
        ['path' => 'adidasMajicaMickyMouse2.jpg'],
        ['path' => 'nikeMajicaJumpmanColorUpGraphicKids1.jpg'],
        ['path' => 'nikeMajicaJumpmanColorUpGraphicKids2.jpg'],
        ['path' => 'nikeMajicaLogoTee1.jpg'],
        ['path' => 'nikeMajicaLogoTee2.jpg'],
        ['path' => 'adidasMajicaDinoPackGraphic1.jpg'],
        ['path' => 'adidasMajicaDinoPackGraphic2.jpg']

    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->pictures as $picture){
            DB::table('pictures')->insert($picture);
        }
    }
}
