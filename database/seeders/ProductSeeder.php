<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    private $products = [

        //men

        ['name' => 'Essentials Jumpman', 'main_picture' => 'nikeDuksericaEssentialsMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Sportswear Essentials', 'main_picture' => 'nikeDuksericaSportsWearEssentialsMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'NSW Keep It Clean', 'main_picture' => 'nikeDuksericaNSWKeepItCleanMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'OG Black', 'main_picture' => 'nikeDuksericaOGBlackMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'NSW TCH FLC Orange CRW', 'main_picture' => 'nikeDuksericaThcFlcOrangeCrwMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'Behinde Trefoil', 'main_picture' => 'adidasDuksericaBehindeTrefoilMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jordan x Paris Saint-Germain', 'main_picture' => 'nikeDuksericaJordanXPsgMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Holographic Back Jumpman', 'main_picture' => 'nikeHolographicJumpmanMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Adicolor Classics Trefoil', 'main_picture' => 'adidasDuksericaAdiColorClassicsMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Alien', 'main_picture' => 'adidasDuksericaAlienMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Paris Saint-Germain Statement Fleece', 'main_picture' => 'nikeDuksericaPsgStatementMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Sportswear Tech Teal', 'main_picture' => 'nikeDuksericaTechTealMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Sportswear Tech Fleece Crimson', 'main_picture' => 'nikeDuksericaTechFleeceCrimsonMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'Jordan Sport DNA', 'main_picture' => 'nikeDuksericaJordanSportDnaMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'CREWNECK Color Blocked', 'main_picture' => 'championDuksericaColorBlockedMain.jpg', 'brand_id' => 6, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Sportswear City Made', 'main_picture' => 'nikeDuksericaSportsWearCityMadeMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'BERBER', 'main_picture' => 'napapijriDuksericaBerberMain.jpg', 'brand_id' => 4, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'Standard Black', 'main_picture' => 'tnfDuksericaStandardBlackMain.jpg', 'brand_id' => 3, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'Standard Navy Blue', 'main_picture' => 'tnfDuksericaStandardNavyBlueMain.jpg', 'brand_id' => 3, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'Roen', 'main_picture' => 'napapijriDuksericaRoenMain.jpg', 'brand_id' => 4, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Brito', 'main_picture' => 'pumaDuksericaBritoMain.jpg', 'brand_id' => 5, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Yellow Hood', 'main_picture' => 'championDuksericaYellowHoodMain.jpg', 'brand_id' => 6, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'RYV', 'main_picture' => 'adidasDuksericaRyvMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Floral Trefoil Hoody', 'main_picture' => 'adidasDuksericaFloralMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Burgee Sum 3', 'main_picture' => 'napapijriDuksericaBurgeeMain.jpg', 'brand_id' => 4, 'category_id' => 1, 'gender_id' => 1, 'fit_id' => 1],

        //women

        ['name' => 'NSW TCH FLC ESS LS TOP TLNK', 'main_picture' => 'nikeDuksericaNswTchFlsEssLsTopTlnkMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Originals x Disney Bambi', 'main_picture' => 'adidasDuksericaDisneyBambiMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Sportswear Green Essential', 'main_picture' => 'nikeDuksericaGreenEssentialMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Sportswear Tech Fleece Baby Pink', 'main_picture' => 'nikeDuksericaTechFleeceBabyPinkMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Sportswear OG Pinky Crewneck', 'main_picture' => 'nikeDuksericaOgPinkyCrewNeckMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Adicolor Essentials', 'main_picture' => 'adidasDuksericaAdicolorEssentialsMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Standard Orange', 'main_picture' => 'tnfDuksericaStandardOrangeMain.jpg', 'brand_id' => 3, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 2],
        ['name' => 'Standard White', 'main_picture' => 'tnfDuksericaStandardWhiteMain.jpg', 'brand_id' => 3, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 2],
        ['name' => 'Pattern Crewneck Purple', 'main_picture' => 'championDuksericaPatternCrewneckPurpleMain.jpg', 'brand_id' => 6, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'OG Crewneck Black', 'main_picture' => 'championDuksericaOgCrewneckBlackMain.jpg', 'brand_id' => 6, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Pinky Hoody', 'main_picture' => 'championDuksericaPinkyHoodyMain.jpg', 'brand_id' => 6, 'category_id' => 1, 'gender_id' => 2, 'fit_id' => 1],

        //kids

        ['name' => 'Jordan Essentials Boxy', 'main_picture' => 'nikeDuksericaJordanEssentialsBoxyMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 2],
        ['name' => 'NSW Tch Flc Brushed', 'main_picture' => 'nikeDuksericaNswTchFlcBrushedMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'JDG Jordan Boxy PO', 'main_picture' => 'nikeDuksericaJDgJordanBoxyPoMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 2],
        ['name' => 'Sportwear Tech Fleece Blocked Color', 'main_picture' => 'nikeDuksericaTechFleeceBlockedColorMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 2],
        ['name' => 'Classics Summer Roar', 'main_picture' => 'pumaDuksericaSummerRoarMain.jpg', 'brand_id' => 5, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 2],
        ['name' => 'Dino Pack Graphic', 'main_picture' => 'adidasDuksericaDinoPackMain.jpg', 'brand_id' => 2, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 3],
        ['name' => 'Sportwear Black Tree Back', 'main_picture' => 'nikeDuksericaBlackTreeBackMain.jpg', 'brand_id' => 1, 'category_id' => 1, 'gender_id' => 3, 'fit_id' => 1],


        ['name' => 'Adicolor Primeblue SST', 'main_picture' => 'adidasGornjiDeoAdicolorSstMain.jpg', 'brand_id' => 2, 'category_id' => 2, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Simpsons Firebird', 'main_picture' => 'adidasGornjiDeoSimpsonsFirebirdMain.jpg', 'brand_id' => 2, 'category_id' => 2, 'gender_id' => 1, 'fit_id' => 1],

        ['name' => 'Marimekko Firebird', 'main_picture' => 'adidasGornjiDeoMarimekkoFirebirdMain.jpg', 'brand_id' => 2, 'category_id' => 2, 'gender_id' => 2, 'fit_id' => 2],
        ['name' => 'OG Loose', 'main_picture' => 'adidasGornjiDeoOgLooseMain.jpg', 'brand_id' => 2, 'category_id' => 2, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Her Studio London', 'main_picture' => 'adidasGornjiDeoStudioLondonMain.jpg', 'brand_id' => 2, 'category_id' => 2, 'gender_id' => 2, 'fit_id' => 1],

        ['name' => 'Sportswear Unlined Utility', 'main_picture' => 'nikeDonjiDeoUnlinedUtilityMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Adicolor Primeblue SST', 'main_picture' => 'adidasDonjiDeoAdicolorSstMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jordan Sport DNA', 'main_picture' => 'nikeDonjiDeoSportDnaMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Britto', 'main_picture' => 'pumaDonjiDeoBrittoMain.jpg', 'brand_id' => 5, 'category_id' => 6, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'SB Skate', 'main_picture' => 'nikeDonjiDeoSkateSbMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Simpsons Firebird', 'main_picture' => 'nikeDonjiDeoSimpsonsFirebirdMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 1, 'fit_id' => 1],

        ['name' => 'Track Pant', 'main_picture' => 'adidasDonjiDeoTrackPantMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Sportswear Essential Collection', 'main_picture' => 'nikeDonjiDeoEssentialCollectionMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Sportswear Essential Fleece', 'main_picture' => 'nikeDonjiDeoEssentialFleeceMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Adicolor Red Track Pants', 'main_picture' => 'adidasDonjiDeoAdicolorRedTrackPantsMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 2, 'fit_id' => 2],
        ['name' => 'OG Loose', 'main_picture' => 'adidasDonjiDeoOgLooseMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Marimekko Firebird', 'main_picture' => 'adidasDonjiDeoMarimekkoFirebirdMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 2, 'fit_id' => 3],

        ['name' => 'Jordan Essentials', 'main_picture' => 'nikeDonjiDeoJordanEssentialMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'Adicolor Classic', 'main_picture' => 'adidasDonjiDeoAdicolorClassicMain.jpg', 'brand_id' => 2, 'category_id' => 6, 'gender_id' => 3, 'fit_id' => 2],
        ['name' => 'Jordan Color Outside The Lines', 'main_picture' => 'nikeDonjiDeoJordanColorOutsideLinesMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 3, 'fit_id' => 2],
        ['name' => 'Sportswear Tech Fleece', 'main_picture' => 'nikeDonjiDeoTechFleeceMain.jpg', 'brand_id' => 1, 'category_id' => 6, 'gender_id' => 3, 'fit_id' => 1],

        ['name' => 'Jumpman Golden Year', 'main_picture' => 'nikePrslukJumpmanGoldenYearMain.jpg', 'brand_id' => 1, 'category_id' => 4, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Padded Stand Collar Puffer', 'main_picture' => 'adidasPrslukPufferMain.jpg', 'brand_id' => 2, 'category_id' => 4, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jumpman 23 Enginereed', 'main_picture' => 'nikePrslukJumpman23EnginereedMain.jpg', 'brand_id' => 1, 'category_id' => 4, 'gender_id' => 1, 'fit_id' => 1],

        ['name' => 'Sportswear Essential', 'main_picture' => 'nikeJaknaSportswearEssentialMain.jpg', 'brand_id' => 1, 'category_id' => 3, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'NSW Core Parka', 'main_picture' => 'nikeJaknaCoreParkaMain.jpg', 'brand_id' => 1, 'category_id' => 3, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Varsity', 'main_picture' => 'adidasSuskavacVarsityMain.jpg', 'brand_id' => 2, 'category_id' => 3, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Marimekko Short Puffer', 'main_picture' => 'adidasJaknaMarimekkoMain.jpg', 'brand_id' => 2, 'category_id' => 3, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Sportswear Essential Classic', 'main_picture' => 'nikeJaknaSportswearEssentialClassicMain.jpg', 'brand_id' => 1, 'category_id' => 3, 'gender_id' => 2, 'fit_id' => 3],

        ['name' => 'NSW HE', 'main_picture' => 'nikeJaknaNswHeMain.jpg', 'brand_id' => 1, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Retro 1996', 'main_picture' => 'tnfJaknaRetroMain.jpg', 'brand_id' => 3, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Hymalayan Down Parka', 'main_picture' => 'tnfJaknaHymalayanMain.jpg', 'brand_id' => 3, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Rainforest Mercury', 'main_picture' => 'napapijriJaknaRainforestMercuryMain.jpg', 'brand_id' => 4, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Pinecroft', 'main_picture' => 'tnfJaknaPinecroftMain.jpg', 'brand_id' => 3, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Graphic Behind The Trefoil', 'main_picture' => 'adidasJaknaGraphicBehindTheTrefoilMain.jpg', 'brand_id' => 2, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jordan Essentials Puffer', 'main_picture' => 'nikeJaknaJordanEssentialsPufferMain.jpg', 'brand_id' => 1, 'category_id' => 3, 'gender_id' => 1, 'fit_id' => 1],




        ['name' => 'NSW Lunar Graphic Tee 2', 'main_picture' => 'nikeMajicaLunarGraphicTeeMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'NSW Burger Graphic Tee', 'main_picture' => 'nikeMajicaBurgerGraphicTeeMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Salis Banana', 'main_picture' => 'napapijriMajicaSalisBananaMain.jpg', 'brand_id' => 4, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jordan Flight', 'main_picture' => 'nikeMajicaJordanFlightMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'SW x P', 'main_picture' => 'pumaMajicaSwXPMain.jpg', 'brand_id' => 5, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jumpman Back Monographic', 'main_picture' => 'nikeMajicaJumpmanBackMonographicMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Jumpman 3D', 'main_picture' => 'nikeMajicaJumpman3DMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 2],
        ['name' => 'Graphic Camo Infil', 'main_picture' => 'adidasMajicaGraphicCamoMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Originals Forever', 'main_picture' => 'adidasMajicaOriginalsForeverMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 3],
        ['name' => 'Stoked Alien', 'main_picture' => 'adidasMajicaStokedAlienMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],
        ['name' => 'Standard Yellow', 'main_picture' => 'tnfMajicaStandardYellowMain.jpg', 'brand_id' => 3, 'category_id' => 5, 'gender_id' => 1, 'fit_id' => 1],

        ['name' => 'Classic Ribbed Tee', 'main_picture' => 'pumaMajicaRibbedTeeMain.jpg', 'brand_id' => 5, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 2],
        ['name' => 'Always Original', 'main_picture' => 'adidasMajicaAlwaysOriginalMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Disney Bambi Deer', 'main_picture' => 'adidasMajicaBambiDeerMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Sportswear Essential Orange', 'main_picture' => 'nikeMajicaSportswearEssentialOrangeMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 3],
        ['name' => 'Easy', 'main_picture' => 'tnfMajicaEasyMain.jpg', 'brand_id' => 3, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'OG Tee Cropped', 'main_picture' => 'nikeMajicaOgTeeCroppedMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 1],
        ['name' => 'Milano Back', 'main_picture' => 'championMajicaMilanoBackMain.jpg', 'brand_id' => 6, 'category_id' => 5, 'gender_id' => 2, 'fit_id' => 1],

        ['name' => 'NSW Tee Futura Boxy', 'main_picture' => 'nikeMajicaFuturaBoxyMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'Jumpman 3D', 'main_picture' => 'nikeMajicaJumpman3DKidsMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'Disney Mickey Mouse', 'main_picture' => 'adidasMajicaMickyMouseMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'Jumpman Color Up Graphic', 'main_picture' => 'nikeMajicaJumpmanColorUpGraphicKidsMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'Logo Tee', 'main_picture' => 'nikeMajicaLogoTeeMain.jpg', 'brand_id' => 1, 'category_id' => 5, 'gender_id' => 3, 'fit_id' => 1],
        ['name' => 'Dino Pack Graphic', 'main_picture' => 'adidasMajicaDinoPackGraphicMain.jpg', 'brand_id' => 2, 'category_id' => 5, 'gender_id' => 3, 'fit_id' => 1],

    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->products as $product){
            DB::table('products')->insert($product);
        }
    }
}
