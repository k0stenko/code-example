<?php
/**
 *  * * Template Name: The Home
 *
 * Created by PhpStorm.
 * User: forest
 * Date: 31.12.15
 * Time: 04:04
 */
get_header(); ?>
    <main role="main" class="landing">
        <section id="hero" class="f-hero-clean">
            <?php if(have_posts()): ?>
        <div class="container-fluid">
        <?php while ( have_posts() ) : the_post(); ?>

            <div class="f-hero-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

            <svg id="clouds_sky" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" width="1200px" height="562px" viewBox="0 0 1200 562" style="enable-background:new 0 0 1200 562;"
                 xml:space="preserve">

                <rect id="ZeroRectangle_1_" x="0" class="st0" width="1200" height="562" style="display: none"/>
                <g id="cloud01_1_">
                    <path class="skyline1" d="M357.4,353.2c-6.8-8.3-17-13.6-28.5-13.6c-14.4,0-26.9,8.3-32.9,20.4c-9.6,2.2-16.8,10.8-16.8,21.1
		c0,11.9,9.7,21.7,21.7,21.7l53.7-0.1c12.8-1.2,22.8-11.9,22.8-24.9C377.4,365.7,368.8,355.6,357.4,353.2z"/>
                    <path class="skyline1" d="M1081.8,190.2c-6.8-8.3-17-13.6-28.5-13.6c-14.4,0-26.9,8.3-32.9,20.4c-9.6,2.2-16.8,10.8-16.8,21.1
		c0,11.9,9.7,21.7,21.7,21.7l53.7-0.1c12.8-1.2,22.8-11.9,22.8-24.9C1101.8,202.6,1093.2,192.5,1081.8,190.2z"/>
                </g>
                <g id="cloud02_1_">
                    <path class="skyline1" d="M1179.5,326.1c-1.1,0-2.1,0.1-3.2,0.3c-4.3-4.2-10-6.7-16.4-6.7c-13,0-23.6,10.8-23.6,24s10.6,24,23.6,24h19.6
		c11.3,0,20.5-9.3,20.5-20.8C1200,335.4,1190.8,326.1,1179.5,326.1z"/>
                    <path class="skyline1" d="M43.2,350.1c-1.1,0-2.1,0.1-3.2,0.3c-4.3-4.2-10-6.7-16.4-6.7c-13,0-23.6,10.8-23.6,24c0,13.3,10.6,24,23.6,24
		h19.6c11.3,0,20.5-9.3,20.5-20.8C63.6,359.5,54.5,350.1,43.2,350.1z"/>
                    <path class="skyline1" d="M823.7,159.2c-1.1,0-2.1,0.1-3.2,0.3c-4.3-4.2-10-6.7-16.4-6.7c-13,0-23.6,10.8-23.6,24
		c0,13.3,10.6,24,23.6,24h19.6c11.3,0,20.5-9.3,20.5-20.8C844.2,168.6,835,159.2,823.7,159.2z"/>
                </g>
                <g id="cloud03_1_">
                    <path class="skyline1" d="M922.5,381.1c-6.8-8.3-17-13.6-28.5-13.6c-14.4,0-26.9,8.3-32.9,20.4c-9.6,2.2-16.8,10.8-16.8,21.1
		c0,11.9,9.7,21.7,21.7,21.7l53.7-0.1c12.8-1.2,22.8-11.9,22.8-24.9C942.5,393.5,933.9,383.4,922.5,381.1z"/>
                    <path class="skyline1" d="M252.8,190.2c-6.8-8.3-17-13.6-28.5-13.6c-14.4,0-26.9,8.3-32.9,20.4c-9.6,2.2-16.8,10.8-16.8,21.1
		c0,11.9,9.7,21.7,21.7,21.7l53.7-0.1c12.8-1.2,22.8-11.9,22.8-24.9C272.8,202.6,264.2,192.5,252.8,190.2z"/>
                </g>
</svg>

            <svg id="skyline1" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" width="1379px" height="524px" viewBox="0 0 1379 524" style="enable-background:new 0 0 1379 524;"
                 xml:space="preserve" class="skylines">

                <path class="skyline1" d="M1222.1,0l-25.5,21.9h-42.9v109.9h-48.6V86.9h-46.9v-64h-51V92h-51v39.7h-14.3V94.3h-28.6v13h-59.9V62.9
	L827.8,41l-25.5,21.9v20.7h-18.9v48.2h-14.3V94.3H660.9v-41l-25.5-9.7l-25.5,9.7v78.5h-14.3V83.6h-18.9V62.9L551.2,41l-25.5,21.9
	v44.4h-59.9v-13h-28.6v37.5h-14.3V92h-51V22.9h-51v64h-46.9v44.8h-48.6V21.9h-42.9L156.9,0l-25.5,21.9v31.4H81v27.3H0V524h1379V80.6
	h-81V53.3h-50.5V21.9L1222.1,0"/>
</svg>


            <svg id="skyline0" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" width="1379px" height="499.5px" viewBox="0 0 1379 499.5" style="enable-background:new 0 0 1379 499.5;"
                 xml:space="preserve">

                <path class="skyline0" d="M743.6,0H641.4v171H425.3V0H323.2v62.9H161.1v54.7H0v381.9h1379V145h-56.7v-82h-102.1v60.6h-37.8V220h-28.6
	V82.1l-51.1-43.8l-51.1,43.8V171h-120v-26h-57.2v75h-28.6v-157H743.6V0"/>
</svg>

            <svg id="mainCityscape" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" width="1500px" height="700px" viewBox="0 0 1500 700" style="enable-background:new 0 0 1500 700;"
                 xml:space="preserve">

<g id="home04">
    <line class="st0" x1="33.8" y1="666.6" x2="33.8" y2="481"/>
    <line class="st0" x1="29.8" y1="481" x2="77.2" y2="481"/>
    <line class="st0" x1="37.9" y1="484.4" x2="77.2" y2="484.4"/>
    <g>
        <g>
            <rect x="42.3" y="557" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="42.3" y1="566.1" x2="50.3" y2="566.1"/>
            <line class="st0" x1="40.7" y1="571.8" x2="51.9" y2="571.8"/>
        </g>
        <g>
            <rect x="61.5" y="557" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="61.5" y1="566.1" x2="69.6" y2="566.1"/>
            <line class="st0" x1="60" y1="571.8" x2="71.1" y2="571.8"/>
        </g>
    </g>
    <g>
        <g>
            <rect x="42.3" y="587" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="42.3" y1="596.2" x2="50.3" y2="596.2"/>
            <line class="st0" x1="40.7" y1="601.9" x2="51.9" y2="601.9"/>
        </g>
        <g>
            <rect x="61.5" y="587" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="61.5" y1="596.2" x2="69.6" y2="596.2"/>
            <line class="st0" x1="60" y1="601.9" x2="71.1" y2="601.9"/>
        </g>
    </g>
    <g>
        <g>
            <rect x="42.3" y="526.9" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="42.3" y1="536.1" x2="50.3" y2="536.1"/>
            <line class="st0" x1="40.7" y1="541.7" x2="51.9" y2="541.7"/>
        </g>
        <g>
            <rect x="61.5" y="526.9" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="61.5" y1="536.1" x2="69.6" y2="536.1"/>
            <line class="st0" x1="60" y1="541.7" x2="71.1" y2="541.7"/>
        </g>
    </g>
    <g>
        <g>
            <rect x="42.3" y="496.8" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="42.3" y1="506" x2="50.3" y2="506"/>
            <line class="st0" x1="40.7" y1="511.6" x2="51.9" y2="511.6"/>
        </g>
        <g>
            <rect x="61.5" y="496.8" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="61.5" y1="506" x2="69.6" y2="506"/>
            <line class="st0" x1="60" y1="511.6" x2="71.1" y2="511.6"/>
        </g>
    </g>
    <g>
        <g>
            <rect x="42.3" y="617.1" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="42.3" y1="626.3" x2="50.3" y2="626.3"/>
            <line class="st0" x1="40.7" y1="632" x2="51.9" y2="632"/>
        </g>
        <g>
            <rect x="61.5" y="617.1" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="61.5" y1="626.3" x2="69.6" y2="626.3"/>
            <line class="st0" x1="60" y1="632" x2="71.1" y2="632"/>
        </g>
    </g>
    <g>
        <g>
            <rect x="42.3" y="647.2" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="42.3" y1="656.4" x2="50.3" y2="656.4"/>
            <line class="st0" x1="40.7" y1="662" x2="51.9" y2="662"/>
        </g>
        <g>
            <rect x="61.5" y="647.2" class="st0" width="8.1" height="14.8"/>
            <line class="st0" x1="61.5" y1="656.4" x2="69.6" y2="656.4"/>
            <line class="st0" x1="60" y1="662" x2="71.1" y2="662"/>
        </g>
    </g>
    <polyline class="st0" points="72.8,671.5 29.5,671.5 29.5,666.6 60.7,666.6 	"/>
    <line class="st0" x1="29.7" y1="639.5" x2="60.8" y2="639.5"/>
</g>
                <g id="home03">
                    <line class="st0" x1="77.2" y1="666.6" x2="77.2" y2="388.4"/>
                    <line class="st0" x1="161.6" y1="388.4" x2="161.6" y2="449.2"/>
                    <line class="st0" x1="73.1" y1="388.4" x2="165.6" y2="388.4"/>
                    <line class="st0" x1="81.2" y1="391.8" x2="157.6" y2="391.8"/>
                    <g>
                        <g>
                            <rect x="85.6" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="566.1" x2="93.7" y2="566.1"/>
                            <line class="st0" x1="84.1" y1="571.8" x2="95.2" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="104.9" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="566.1" x2="113" y2="566.1"/>
                            <line class="st0" x1="103.3" y1="571.8" x2="114.5" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="124.1" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="566.1" x2="132.2" y2="566.1"/>
                            <line class="st0" x1="122.6" y1="571.8" x2="133.8" y2="571.8"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="596.2" x2="93.7" y2="596.2"/>
                            <line class="st0" x1="84.1" y1="601.9" x2="95.2" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="104.9" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="596.2" x2="113" y2="596.2"/>
                            <line class="st0" x1="103.3" y1="601.9" x2="114.5" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="124.1" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="596.2" x2="132.2" y2="596.2"/>
                            <line class="st0" x1="122.6" y1="601.9" x2="133.8" y2="601.9"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="526.9" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="536.1" x2="93.7" y2="536.1"/>
                            <line class="st0" x1="84.1" y1="541.7" x2="95.2" y2="541.7"/>
                        </g>
                        <g>
                            <rect x="104.9" y="526.9" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="536.1" x2="113" y2="536.1"/>
                            <line class="st0" x1="103.3" y1="541.7" x2="114.5" y2="541.7"/>
                        </g>
                        <g>
                            <rect x="124.1" y="526.9" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="536.1" x2="132.2" y2="536.1"/>
                            <line class="st0" x1="122.6" y1="541.7" x2="133.8" y2="541.7"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="506" x2="93.7" y2="506"/>
                            <line class="st0" x1="84.1" y1="511.6" x2="95.2" y2="511.6"/>
                        </g>
                        <g>
                            <rect x="104.9" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="506" x2="113" y2="506"/>
                            <line class="st0" x1="103.3" y1="511.6" x2="114.5" y2="511.6"/>
                        </g>
                        <g>
                            <rect x="124.1" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="506" x2="132.2" y2="506"/>
                            <line class="st0" x1="122.6" y1="511.6" x2="133.8" y2="511.6"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="475.9" x2="93.7" y2="475.9"/>
                            <line class="st0" x1="84.1" y1="481.6" x2="95.2" y2="481.6"/>
                        </g>
                        <g>
                            <rect x="104.9" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="475.9" x2="113" y2="475.9"/>
                            <line class="st0" x1="103.3" y1="481.6" x2="114.5" y2="481.6"/>
                        </g>
                        <g>
                            <rect x="124.1" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="475.9" x2="132.2" y2="475.9"/>
                            <line class="st0" x1="122.6" y1="481.6" x2="133.8" y2="481.6"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="437.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="447" x2="93.7" y2="447"/>
                            <line class="st0" x1="84.1" y1="452.6" x2="95.2" y2="452.6"/>
                        </g>
                        <g>
                            <rect x="104.9" y="437.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="447" x2="113" y2="447"/>
                            <line class="st0" x1="103.3" y1="452.6" x2="114.5" y2="452.6"/>
                        </g>
                        <g>
                            <rect x="124.1" y="437.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="447" x2="132.2" y2="447"/>
                            <line class="st0" x1="122.6" y1="452.6" x2="133.8" y2="452.6"/>
                        </g>
                        <g>
                            <polyline class="st0" points="143.4,449.2 143.4,437.8 151.5,437.8 151.5,449.2 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="407.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="416.9" x2="93.7" y2="416.9"/>
                            <line class="st0" x1="84.1" y1="422.6" x2="95.2" y2="422.6"/>
                        </g>
                        <g>
                            <rect x="104.9" y="407.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="416.9" x2="113" y2="416.9"/>
                            <line class="st0" x1="103.3" y1="422.6" x2="114.5" y2="422.6"/>
                        </g>
                        <g>
                            <rect x="124.1" y="407.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="416.9" x2="132.2" y2="416.9"/>
                            <line class="st0" x1="122.6" y1="422.6" x2="133.8" y2="422.6"/>
                        </g>
                        <g>
                            <rect x="143.4" y="407.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="143.4" y1="416.9" x2="151.5" y2="416.9"/>
                            <line class="st0" x1="141.8" y1="422.6" x2="153" y2="422.6"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polyline class="st0" points="85.6,634.2 85.6,617.1 93.7,617.1 93.7,634.2 			"/>
                        </g>
                        <g>
                            <rect x="104.9" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="626.3" x2="113" y2="626.3"/>
                            <line class="st0" x1="103.3" y1="632" x2="114.5" y2="632"/>
                        </g>
                        <g>
                            <rect x="124.1" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="626.3" x2="132.2" y2="626.3"/>
                            <line class="st0" x1="122.6" y1="632" x2="133.8" y2="632"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="85.6" y="647.2" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="85.6" y1="656.4" x2="93.7" y2="656.4"/>
                            <line class="st0" x1="84.1" y1="662" x2="95.2" y2="662"/>
                        </g>
                        <g>
                            <rect x="104.9" y="647.2" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="104.9" y1="656.4" x2="113" y2="656.4"/>
                            <line class="st0" x1="103.3" y1="662" x2="114.5" y2="662"/>
                        </g>
                        <g>
                            <rect x="124.1" y="647.2" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="124.1" y1="656.4" x2="132.2" y2="656.4"/>
                            <line class="st0" x1="122.6" y1="662" x2="133.8" y2="662"/>
                        </g>
                    </g>
                    <polyline class="st0" points="165.9,671.5 72.8,671.5 72.8,666.6 104.1,666.6 	"/>
                    <line class="st0" x1="73.1" y1="639.5" x2="119.2" y2="639.5"/>
                    <line class="st0" x1="73.1" y1="634.2" x2="119.2" y2="634.2"/>
                    <polyline class="st0" points="161.7,386 155.2,366.1 83.7,366.1 77.2,386 	"/>
                    <polygon class="st0" points="105.3,384 119.4,375.1 133.6,384 	"/>
                    <line class="st0" x1="98" y1="384" x2="139.7" y2="384"/>
                    <circle class="st0" cx="119.4" cy="380.2" r="1.7"/>
                    <g>
                        <line class="st0" x1="74.3" y1="635.6" x2="74.3" y2="639.5"/>
                        <line class="st0" x1="111.4" y1="635.6" x2="111.4" y2="639.5"/>
                        <line class="st0" x1="80.1" y1="635.6" x2="80.1" y2="639.5"/>
                        <line class="st0" x1="82.9" y1="635.6" x2="82.9" y2="639.5"/>
                        <line class="st0" x1="85.8" y1="635.6" x2="85.8" y2="639.5"/>
                        <line class="st0" x1="88.7" y1="635.6" x2="88.7" y2="639.5"/>
                        <line class="st0" x1="91.5" y1="635.6" x2="91.5" y2="639.5"/>
                        <line class="st0" x1="94.4" y1="635.6" x2="94.4" y2="639.5"/>
                        <line class="st0" x1="97.2" y1="635.6" x2="97.2" y2="639.5"/>
                        <line class="st0" x1="100.1" y1="635.6" x2="100.1" y2="639.5"/>
                        <line class="st0" x1="103" y1="635.6" x2="103" y2="639.5"/>
                        <line class="st0" x1="105.8" y1="635.6" x2="105.8" y2="639.5"/>
                        <line class="st0" x1="108.7" y1="635.6" x2="108.7" y2="639.5"/>
                        <line class="st0" x1="117" y1="635.6" x2="117" y2="639.5"/>
                        <line class="st0" x1="114.4" y1="635.6" x2="114.4" y2="639.5"/>
                    </g>
                </g>
                <g id="home02">
                    <line class="st0" x1="143.3" y1="666.6" x2="143.3" y2="449.3"/>
                    <line class="st0" x1="227.7" y1="449.3" x2="227.7" y2="538.3"/>
                    <line class="st0" x1="139.2" y1="449.3" x2="231.7" y2="449.3"/>
                    <line class="st0" x1="147.3" y1="452.6" x2="223.6" y2="452.6"/>
                    <g>
                        <g>
                            <rect x="151.7" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="566.1" x2="159.8" y2="566.1"/>
                            <line class="st0" x1="150.2" y1="571.8" x2="161.3" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="171" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="566.1" x2="179" y2="566.1"/>
                            <line class="st0" x1="169.4" y1="571.8" x2="180.6" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="190.2" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="566.1" x2="198.3" y2="566.1"/>
                            <line class="st0" x1="188.7" y1="571.8" x2="199.8" y2="571.8"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="151.7" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="596.2" x2="159.8" y2="596.2"/>
                            <line class="st0" x1="150.2" y1="601.9" x2="161.3" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="171" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="596.2" x2="179" y2="596.2"/>
                            <line class="st0" x1="169.4" y1="601.9" x2="180.6" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="190.2" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="596.2" x2="198.3" y2="596.2"/>
                            <line class="st0" x1="188.7" y1="601.9" x2="199.8" y2="601.9"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="151.7" y="526.9" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="536.1" x2="159.8" y2="536.1"/>
                            <line class="st0" x1="150.2" y1="541.7" x2="161.3" y2="541.7"/>
                        </g>
                        <g>
                            <rect x="171" y="526.9" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="536.1" x2="179" y2="536.1"/>
                            <line class="st0" x1="169.4" y1="541.7" x2="180.6" y2="541.7"/>
                        </g>
                        <g>
                            <rect x="190.2" y="526.9" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="536.1" x2="198.3" y2="536.1"/>
                            <line class="st0" x1="188.7" y1="541.7" x2="199.8" y2="541.7"/>
                        </g>
                        <g>
                            <polyline class="st0" points="209.5,538.3 209.5,526.9 217.6,526.9 217.6,538.3 			"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="151.7" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="506" x2="159.8" y2="506"/>
                            <line class="st0" x1="150.2" y1="511.6" x2="161.3" y2="511.6"/>
                        </g>
                        <g>
                            <rect x="171" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="506" x2="179" y2="506"/>
                            <line class="st0" x1="169.4" y1="511.6" x2="180.6" y2="511.6"/>
                        </g>
                        <g>
                            <rect x="190.2" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="506" x2="198.3" y2="506"/>
                            <line class="st0" x1="188.7" y1="511.6" x2="199.8" y2="511.6"/>
                        </g>
                        <g>
                            <rect x="209.5" y="496.8" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="209.5" y1="506" x2="217.6" y2="506"/>
                            <line class="st0" x1="207.9" y1="511.6" x2="219.1" y2="511.6"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="151.7" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="475.9" x2="159.8" y2="475.9"/>
                            <line class="st0" x1="150.2" y1="481.6" x2="161.3" y2="481.6"/>
                        </g>
                        <g>
                            <rect x="171" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="475.9" x2="179" y2="475.9"/>
                            <line class="st0" x1="169.4" y1="481.6" x2="180.6" y2="481.6"/>
                        </g>
                        <g>
                            <rect x="190.2" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="475.9" x2="198.3" y2="475.9"/>
                            <line class="st0" x1="188.7" y1="481.6" x2="199.8" y2="481.6"/>
                        </g>
                        <g>
                            <rect x="209.5" y="466.7" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="209.5" y1="475.9" x2="217.6" y2="475.9"/>
                            <line class="st0" x1="207.9" y1="481.6" x2="219.1" y2="481.6"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="151.7" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="626.3" x2="159.8" y2="626.3"/>
                            <line class="st0" x1="150.2" y1="632" x2="161.3" y2="632"/>
                        </g>
                        <g>
                            <rect x="171" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="626.3" x2="179" y2="626.3"/>
                            <line class="st0" x1="169.4" y1="632" x2="180.6" y2="632"/>
                        </g>
                        <g>
                            <rect x="190.2" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="626.3" x2="198.3" y2="626.3"/>
                            <line class="st0" x1="188.7" y1="632" x2="199.8" y2="632"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="151.7" y="647.2" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="151.7" y1="656.4" x2="159.8" y2="656.4"/>
                            <line class="st0" x1="150.2" y1="662" x2="161.3" y2="662"/>
                        </g>
                        <g>
                            <rect x="171" y="647.2" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="171" y1="656.4" x2="179" y2="656.4"/>
                            <line class="st0" x1="169.4" y1="662" x2="180.6" y2="662"/>
                        </g>
                        <g>
                            <rect x="190.2" y="647.2" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="190.2" y1="656.4" x2="198.3" y2="656.4"/>
                            <line class="st0" x1="188.7" y1="662" x2="199.8" y2="662"/>
                        </g>
                    </g>
                    <polyline class="st0" points="232,671.5 138.9,671.5 138.9,666.6 170.2,666.6 	"/>
                    <line class="st0" x1="139.1" y1="639.5" x2="170.2" y2="639.5"/>
                    <g>
                        <polyline class="st0" points="236.4,477 236.4,486.1 224,486.1 		"/>
                        <line class="st0" x1="232.1" y1="486.1" x2="232.1" y2="477"/>
                        <line class="st0" x1="227.6" y1="477" x2="238.4" y2="477"/>
                    </g>
                    <g>
                        <line class="st0" x1="234.6" y1="484.8" x2="234.6" y2="538.3"/>
                        <line class="st0" x1="230.2" y1="484.8" x2="230.2" y2="538.3"/>
                        <line class="st0" x1="230.2" y1="489.1" x2="234.6" y2="489.1"/>
                        <line class="st0" x1="230.2" y1="491.7" x2="234.6" y2="491.7"/>
                        <line class="st0" x1="230.2" y1="494.3" x2="234.6" y2="494.3"/>
                        <line class="st0" x1="230.2" y1="496.9" x2="234.6" y2="496.9"/>
                        <line class="st0" x1="230.2" y1="499.6" x2="234.6" y2="499.6"/>
                        <line class="st0" x1="230.2" y1="502.2" x2="234.6" y2="502.2"/>
                        <line class="st0" x1="230.2" y1="504.8" x2="234.6" y2="504.8"/>
                        <line class="st0" x1="230.2" y1="507.4" x2="234.6" y2="507.4"/>
                        <line class="st0" x1="230.2" y1="510" x2="234.6" y2="510"/>
                        <line class="st0" x1="230.2" y1="512.6" x2="234.6" y2="512.6"/>
                        <line class="st0" x1="230.2" y1="515.2" x2="234.6" y2="515.2"/>
                        <line class="st0" x1="230.2" y1="517.9" x2="234.6" y2="517.9"/>
                        <line class="st0" x1="230.2" y1="520.5" x2="234.6" y2="520.5"/>
                        <line class="st0" x1="230.2" y1="523.1" x2="234.6" y2="523.1"/>
                        <line class="st0" x1="230.2" y1="525.7" x2="234.6" y2="525.7"/>
                        <line class="st0" x1="230.2" y1="528.3" x2="234.6" y2="528.3"/>
                        <line class="st0" x1="230.2" y1="530.9" x2="234.6" y2="530.9"/>
                        <line class="st0" x1="230.2" y1="533.5" x2="234.6" y2="533.5"/>
                        <line class="st0" x1="230.2" y1="536.2" x2="234.6" y2="536.2"/>
                    </g>
                </g>
                <g id="home01">
                    <line class="st0" x1="209.5" y1="666.6" x2="209.5" y2="538.3"/>
                    <line class="st0" x1="293.9" y1="538.3" x2="293.9" y2="666.6"/>
                    <line class="st0" x1="205.5" y1="538.3" x2="298" y2="538.3"/>
                    <line class="st0" x1="213.6" y1="541.7" x2="289.9" y2="541.7"/>
                    <g>
                        <polyline class="st0" points="302.7,567.3 302.7,576.3 290.3,576.3 		"/>
                        <line class="st0" x1="298.4" y1="576.3" x2="298.4" y2="567.3"/>
                        <line class="st0" x1="293.9" y1="567.3" x2="304.7" y2="567.3"/>
                    </g>
                    <g>
                        <polyline class="st0" points="302.7,597.3 302.7,606.4 290.3,606.4 		"/>
                        <line class="st0" x1="298.4" y1="606.4" x2="298.4" y2="597.3"/>
                        <line class="st0" x1="293.9" y1="597.3" x2="304.7" y2="597.3"/>
                    </g>
                    <g>
                        <polyline class="st0" points="302.7,627.4 302.7,636.5 290.3,636.5 		"/>
                        <line class="st0" x1="298.4" y1="636.5" x2="298.4" y2="627.4"/>
                        <line class="st0" x1="293.9" y1="627.4" x2="304.7" y2="627.4"/>
                    </g>
                    <g>
                        <g>
                            <rect x="218" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="218" y1="566.1" x2="226" y2="566.1"/>
                            <line class="st0" x1="216.4" y1="571.8" x2="227.6" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="237.2" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="237.2" y1="566.1" x2="245.3" y2="566.1"/>
                            <line class="st0" x1="235.7" y1="571.8" x2="246.8" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="256.5" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="256.5" y1="566.1" x2="264.6" y2="566.1"/>
                            <line class="st0" x1="254.9" y1="571.8" x2="266.1" y2="571.8"/>
                        </g>
                        <g>
                            <rect x="275.7" y="557" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="275.7" y1="566.1" x2="283.8" y2="566.1"/>
                            <line class="st0" x1="274.2" y1="571.8" x2="285.4" y2="571.8"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="218" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="218" y1="596.2" x2="226" y2="596.2"/>
                            <line class="st0" x1="216.4" y1="601.9" x2="227.6" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="237.2" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="237.2" y1="596.2" x2="245.3" y2="596.2"/>
                            <line class="st0" x1="235.7" y1="601.9" x2="246.8" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="256.5" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="256.5" y1="596.2" x2="264.6" y2="596.2"/>
                            <line class="st0" x1="254.9" y1="601.9" x2="266.1" y2="601.9"/>
                        </g>
                        <g>
                            <rect x="275.7" y="587" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="275.7" y1="596.2" x2="283.8" y2="596.2"/>
                            <line class="st0" x1="274.2" y1="601.9" x2="285.4" y2="601.9"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="218" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="218" y1="626.3" x2="226" y2="626.3"/>
                            <line class="st0" x1="216.4" y1="632" x2="227.6" y2="632"/>
                        </g>
                        <g>
                            <rect x="237.2" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="237.2" y1="626.3" x2="245.3" y2="626.3"/>
                            <line class="st0" x1="235.7" y1="632" x2="246.8" y2="632"/>
                        </g>
                        <g>
                            <rect x="256.5" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="256.5" y1="626.3" x2="264.6" y2="626.3"/>
                            <line class="st0" x1="254.9" y1="632" x2="266.1" y2="632"/>
                        </g>
                        <g>
                            <rect x="275.7" y="617.1" class="st0" width="8.1" height="14.8"/>
                            <line class="st0" x1="275.7" y1="626.3" x2="283.8" y2="626.3"/>
                            <line class="st0" x1="274.2" y1="632" x2="285.4" y2="632"/>
                        </g>
                    </g>
                    <g>
                        <rect x="218" y="647.2" class="st0" width="8.1" height="14.8"/>
                        <line class="st0" x1="218" y1="656.4" x2="226" y2="656.4"/>
                        <line class="st0" x1="216.4" y1="662" x2="227.6" y2="662"/>
                    </g>
                    <g>
                        <rect x="275.7" y="647.2" class="st0" width="8.1" height="14.8"/>
                        <line class="st0" x1="275.7" y1="656.4" x2="283.8" y2="656.4"/>
                        <line class="st0" x1="274.2" y1="662" x2="285.4" y2="662"/>
                    </g>
                    <g>
                        <line class="st0" x1="245.5" y1="656.4" x2="258.3" y2="656.4"/>
                        <rect x="245.5" y="647.2" class="st0" width="6.4" height="21.6"/>
                        <rect x="251.9" y="647.2" class="st0" width="6.4" height="21.6"/>
                        <line class="st0" x1="244" y1="668.8" x2="259.5" y2="668.8"/>
                    </g>
                    <polyline class="st0" points="267.1,666.6 298.3,666.6 298.3,671.5 205.2,671.5 205.2,666.6 236.4,666.6 	"/>
                    <g>
                        <path class="st0" d="M239.3,649.3c0-6.9,5.6-12.4,12.4-12.4s12.4,5.6,12.4,12.4"/>
                        <line class="st0" x1="261.7" y1="649.3" x2="267.6" y2="649.3"/>
                        <line class="st0" x1="235.9" y1="649.3" x2="241.3" y2="649.3"/>
                    </g>
                    <line class="st0" x1="267" y1="639.5" x2="298.3" y2="639.5"/>
                    <line class="st0" x1="205.4" y1="639.5" x2="236.5" y2="639.5"/>
                </g>
                <g id="business_centre">
                    <line class="st0" x1="1146" y1="455.4" x2="1043.3" y2="455.4"/>
                    <line class="st0" x1="1146" y1="452.9" x2="1043.3" y2="452.9"/>
                    <line class="st0" x1="1047.8" y1="455.4" x2="1047.8" y2="671.5"/>
                    <polyline class="st0" points="1141.4,449.9 1134.2,427.9 1055.1,427.9 1047.9,449.9 	"/>
                    <line class="st0" x1="1141.9" y1="666.6" x2="1141.9" y2="455.4"/>
                    <g>
                        <g>

                            <rect x="1123" y="466.7" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2257.6992 948.2955)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="481.2" x2="1128.8" y2="467"/>
                            <line class="st0" x1="1136.9" y1="481.6" x2="1120.8" y2="481.6"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="466.7" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2213.6396 948.2955)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="481.2" x2="1106.8" y2="467"/>
                            <line class="st0" x1="1114.8" y1="481.6" x2="1098.8" y2="481.6"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="466.7" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2169.5801 948.2955)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="481.2" x2="1084.8" y2="467"/>
                            <line class="st0" x1="1092.8" y1="481.6" x2="1076.8" y2="481.6"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="466.7" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2125.5203 948.2955)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="481.2" x2="1062.8" y2="467"/>
                            <line class="st0" x1="1070.8" y1="481.6" x2="1054.7" y2="481.6"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1123" y="490.9" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2257.6992 996.6742)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="505.4" x2="1128.8" y2="491.2"/>
                            <line class="st0" x1="1136.9" y1="505.8" x2="1120.8" y2="505.8"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="490.9" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2213.6396 996.6742)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="505.4" x2="1106.8" y2="491.2"/>
                            <line class="st0" x1="1114.8" y1="505.8" x2="1098.8" y2="505.8"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="490.9" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2169.5801 996.6742)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="505.4" x2="1084.8" y2="491.2"/>
                            <line class="st0" x1="1092.8" y1="505.8" x2="1076.8" y2="505.8"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="490.9" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2125.5203 996.6742)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="505.4" x2="1062.8" y2="491.2"/>
                            <line class="st0" x1="1070.8" y1="505.8" x2="1054.7" y2="505.8"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1123" y="515.1" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2257.6992 1045.0529)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="529.6" x2="1128.8" y2="515.4"/>
                            <line class="st0" x1="1136.9" y1="529.9" x2="1120.8" y2="529.9"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="515.1" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2213.6396 1045.0529)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="529.6" x2="1106.8" y2="515.4"/>
                            <line class="st0" x1="1114.8" y1="529.9" x2="1098.8" y2="529.9"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="515.1" transform="matrix(-1 -4.421542e-11 4.421542e-11 -1 2169.5801 1045.0529)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="529.6" x2="1084.8" y2="515.4"/>
                            <line class="st0" x1="1092.8" y1="529.9" x2="1076.8" y2="529.9"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="515.1" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2125.5203 1045.0529)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="529.6" x2="1062.8" y2="515.4"/>
                            <line class="st0" x1="1070.8" y1="529.9" x2="1054.7" y2="529.9"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1123" y="539.3" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2257.6992 1093.4316)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="553.7" x2="1128.8" y2="539.6"/>
                            <line class="st0" x1="1136.9" y1="554.1" x2="1120.8" y2="554.1"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="539.3" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2213.6396 1093.4316)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="553.7" x2="1106.8" y2="539.6"/>
                            <line class="st0" x1="1114.8" y1="554.1" x2="1098.8" y2="554.1"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="539.3" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2169.5801 1093.4316)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="553.7" x2="1084.8" y2="539.6"/>
                            <line class="st0" x1="1092.8" y1="554.1" x2="1076.8" y2="554.1"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="539.3" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2125.5203 1093.4316)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="553.7" x2="1062.8" y2="539.6"/>
                            <line class="st0" x1="1070.8" y1="554.1" x2="1054.7" y2="554.1"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1123" y="563.5" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2257.6992 1141.8103)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="577.9" x2="1128.8" y2="563.7"/>
                            <line class="st0" x1="1136.9" y1="578.3" x2="1120.8" y2="578.3"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="563.5" transform="matrix(-1 -4.421542e-11 4.421542e-11 -1 2213.6396 1141.8103)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="577.9" x2="1106.8" y2="563.7"/>
                            <line class="st0" x1="1114.8" y1="578.3" x2="1098.8" y2="578.3"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="563.5" transform="matrix(-1 -4.406088e-11 4.406088e-11 -1 2169.5801 1141.8103)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="577.9" x2="1084.8" y2="563.7"/>
                            <line class="st0" x1="1092.8" y1="578.3" x2="1076.8" y2="578.3"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="563.5" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2125.5203 1141.8103)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="577.9" x2="1062.8" y2="563.7"/>
                            <line class="st0" x1="1070.8" y1="578.3" x2="1054.7" y2="578.3"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1123" y="587.7" transform="matrix(-1 -4.421542e-11 4.421542e-11 -1 2257.6992 1190.189)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="602.1" x2="1128.8" y2="587.9"/>
                            <line class="st0" x1="1136.9" y1="602.5" x2="1120.8" y2="602.5"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="587.7" transform="matrix(-1 -4.328816e-11 4.328816e-11 -1 2213.6396 1190.189)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="602.1" x2="1106.8" y2="587.9"/>
                            <line class="st0" x1="1114.8" y1="602.5" x2="1098.8" y2="602.5"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="587.7" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2169.5801 1190.189)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="602.1" x2="1084.8" y2="587.9"/>
                            <line class="st0" x1="1092.8" y1="602.5" x2="1076.8" y2="602.5"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="587.7" transform="matrix(-1 -4.607082e-11 4.607082e-11 -1 2125.5203 1190.189)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="602.1" x2="1062.8" y2="587.9"/>
                            <line class="st0" x1="1070.8" y1="602.5" x2="1054.7" y2="602.5"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1123" y="611.9" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2257.6992 1238.5676)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1128.8" y1="626.3" x2="1128.8" y2="612.1"/>
                            <line class="st0" x1="1136.9" y1="626.7" x2="1120.8" y2="626.7"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1100.9" y="611.9" transform="matrix(-1 -4.344270e-11 4.344270e-11 -1 2213.6396 1238.5676)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1106.8" y1="626.3" x2="1106.8" y2="612.1"/>
                            <line class="st0" x1="1114.8" y1="626.7" x2="1098.8" y2="626.7"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1078.9" y="611.9" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 2169.5801 1238.5676)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1084.8" y1="626.3" x2="1084.8" y2="612.1"/>
                            <line class="st0" x1="1092.8" y1="626.7" x2="1076.8" y2="626.7"/>
                        </g>
                    </g>
                    <g>
                        <g>

                            <rect x="1056.9" y="611.9" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 2125.5203 1238.5676)" class="st0" width="11.8" height="14.8"/>
                            <line class="st0" x1="1062.8" y1="626.3" x2="1062.8" y2="612.1"/>
                            <line class="st0" x1="1070.8" y1="626.7" x2="1054.7" y2="626.7"/>
                        </g>
                    </g>
                    <g>

                        <rect x="1100.9" y="647.2" transform="matrix(-1 -4.473545e-11 4.473545e-11 -1 2235.6633 1309.241)" class="st0" width="33.8" height="14.8"/>
                        <line class="st0" x1="1136.9" y1="662" x2="1125.1" y2="662"/>
                    </g>
                    <g>
                        <rect x="1056.9" y="647.2" class="st0" width="33.8" height="14.8"/>
                        <line class="st0" x1="1054.7" y1="662" x2="1066.5" y2="662"/>
                    </g>
                    <polyline class="st0" points="1146.3,671.5 1146.3,666.6 1115,666.6 	"/>
                    <line class="st0" x1="1146.1" y1="639.5" x2="1115" y2="639.5"/>
                    <g>
                        <line class="st0" x1="1145.3" y1="452.9" x2="1145.3" y2="448.8"/>
                        <line class="st0" x1="1135.2" y1="452.9" x2="1135.2" y2="448.8"/>
                        <line class="st0" x1="1125" y1="452.9" x2="1125" y2="448.8"/>
                        <line class="st0" x1="1114.9" y1="452.9" x2="1114.9" y2="448.8"/>
                        <line class="st0" x1="1104.8" y1="452.9" x2="1104.8" y2="448.8"/>
                        <line class="st0" x1="1094.7" y1="452.9" x2="1094.7" y2="448.8"/>
                        <line class="st0" x1="1084.5" y1="452.9" x2="1084.5" y2="448.8"/>
                        <line class="st0" x1="1074.4" y1="452.9" x2="1074.4" y2="448.8"/>
                        <line class="st0" x1="1064.3" y1="452.9" x2="1064.3" y2="448.8"/>
                        <line class="st0" x1="1054.1" y1="452.9" x2="1054.1" y2="448.8"/>
                        <line class="st0" x1="1044" y1="452.9" x2="1044" y2="448.8"/>
                    </g>
                    <g>
                        <line class="st0" x1="1117.4" y1="657.3" x2="1111.2" y2="651.1"/>
                        <line class="st0" x1="1113.5" y1="656.1" x2="1109.9" y2="652.4"/>
                        <line class="st0" x1="1118.9" y1="656.1" x2="1115.2" y2="652.4"/>
                    </g>
                    <g>
                        <line class="st0" x1="1083.3" y1="657.3" x2="1077.1" y2="651.1"/>
                        <line class="st0" x1="1079.4" y1="656.1" x2="1075.7" y2="652.4"/>
                        <line class="st0" x1="1084.8" y1="656.1" x2="1081.1" y2="652.4"/>
                    </g>
                </g>
                <g id="theatre">
                    <g>
                        <g>
                            <line class="st0" x1="1038.9" y1="513.7" x2="1038.9" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="1038.9" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="1028.8" y1="513.7" x2="1028.8" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="1028.8" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="1018.7" y1="513.7" x2="1018.7" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="1018.7" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="1008.5" y1="513.7" x2="1008.5" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="1008.5" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="998.4" y1="513.7" x2="998.4" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="998.4" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="988.3" y1="513.7" x2="988.3" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="988.3" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="978.2" y1="513.7" x2="978.2" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="978.2" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="968" y1="513.7" x2="968" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="968" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="957.9" y1="513.7" x2="957.9" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="957.9" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="947.8" y1="513.7" x2="947.8" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="947.8" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="937.7" y1="513.7" x2="937.7" y2="508.2"/>
                            <g>
                                <circle class="st1" cx="937.7" cy="508.2" r="0.9"/>
                            </g>
                        </g>
                    </g>
                    <line class="st0" x1="1047.8" y1="587.9" x2="857.4" y2="587.9"/>
                    <g>
                        <path class="st0" d="M905.4,662h29.9v-35.2c0-8.3-6.7-14.9-14.9-14.9h0c-8.3,0-14.9,6.7-14.9,14.9V662z"/>
                        <line class="st0" x1="920.3" y1="611.9" x2="920.3" y2="662"/>
                        <line class="st0" x1="905.4" y1="627.3" x2="935.2" y2="627.3"/>
                        <line class="st0" x1="905.4" y1="645.6" x2="935.2" y2="645.6"/>
                    </g>
                    <g>
                        <path class="st0" d="M950.5,662h29.9v-35.2c0-8.3-6.7-14.9-14.9-14.9l0,0c-8.3,0-14.9,6.7-14.9,14.9V662z"/>
                        <line class="st0" x1="965.4" y1="611.9" x2="965.4" y2="662"/>
                        <line class="st0" x1="950.5" y1="627.3" x2="980.4" y2="627.3"/>
                        <line class="st0" x1="950.5" y1="645.6" x2="980.4" y2="645.6"/>
                    </g>
                    <g>
                        <path class="st0" d="M995.6,662h29.9v-35.2c0-8.3-6.7-14.9-14.9-14.9h0c-8.3,0-14.9,6.7-14.9,14.9V662z"/>
                        <line class="st0" x1="1010.6" y1="611.9" x2="1010.6" y2="662"/>
                        <line class="st0" x1="995.6" y1="627.3" x2="1025.5" y2="627.3"/>
                        <line class="st0" x1="995.6" y1="645.6" x2="1025.5" y2="645.6"/>
                    </g>
                    <line class="st0" x1="857.4" y1="601.3" x2="979.3" y2="601.3"/>
                    <polyline class="st0" points="964.1,666.6 844.5,666.6 844.5,671.5 	"/>
                    <polyline class="st0" points="895.8,661.7 851.9,661.7 851.9,666.6 	"/>
                    <line class="st0" x1="887.5" y1="594.2" x2="887.5" y2="666.6"/>
                    <path class="st0" d="M870.6,611.5c1.9,0,3.4-1.5,3.4-3.4s-1.5-3.4-3.4-3.4h-9.8c-1.9,0-3.4,1.5-3.4,3.4s1.5,3.4,3.4,3.4"/>
                    <line class="st0" x1="865.7" y1="608" x2="865.7" y2="652.3"/>
                    <line class="st0" x1="863.3" y1="609.2" x2="863.3" y2="652.3"/>
                    <line class="st0" x1="868.2" y1="609.2" x2="868.2" y2="652.3"/>
                    <line class="st0" x1="870.5" y1="654.8" x2="861" y2="654.8"/>
                    <line class="st0" x1="871.7" y1="658" x2="859.8" y2="658"/>

                    <rect x="907" y="539.6" transform="matrix(-1 -4.484336e-11 4.484336e-11 -1 1954.8093 1127.4949)" class="st0" width="140.7" height="48.4"/>
                    <line class="st0" x1="950.2" y1="566.9" x2="950.2" y2="579"/>
                    <line class="st0" x1="950.2" y1="556.6" x2="950.2" y2="561.4"/>
                    <path class="st0" d="M947.5,564.1C947.5,564.1,947.5,564.1,947.5,564.1c0,1.6,1.2,2.8,2.7,2.8c1.5,0,2.7-1.2,2.7-2.7c0,0,0,0,0,0
		l3.4,0v14.8h-12.3v-14.8H947.5z"/>
                    <path class="st0" d="M950.2,556.6c3.4,0,6.2,2.8,6.2,6.2v1.3H953c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.7h-3.4v-1.3
		C944.1,559.4,946.8,556.6,950.2,556.6z"/>
                    <line class="st0" x1="977.2" y1="566.9" x2="977.2" y2="579"/>
                    <line class="st0" x1="977.2" y1="556.6" x2="977.2" y2="561.4"/>
                    <path class="st0" d="M974.4,564.1C974.4,564.1,974.4,564.1,974.4,564.1c0,1.6,1.2,2.8,2.7,2.8c1.5,0,2.7-1.2,2.7-2.7c0,0,0,0,0,0
		l3.4,0v14.8H971v-14.8H974.4z"/>
                    <path class="st0" d="M977.2,556.6c3.4,0,6.2,2.8,6.2,6.2v1.3h-3.4c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.7H971v-1.3
		C971,559.4,973.8,556.6,977.2,556.6z"/>
                    <line class="st0" x1="1004.1" y1="566.9" x2="1004.1" y2="579"/>
                    <line class="st0" x1="1004.1" y1="556.6" x2="1004.1" y2="561.4"/>
                    <path class="st0" d="M1001.4,564.1C1001.4,564.1,1001.4,564.1,1001.4,564.1c0,1.6,1.2,2.8,2.7,2.8c1.5,0,2.7-1.2,2.7-2.7
		c0,0,0,0,0,0l3.4,0v14.8h-12.3v-14.8H1001.4z"/>
                    <path class="st0" d="M1004.1,556.6c3.4,0,6.2,2.8,6.2,6.2v1.3h-3.4c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.7h-3.4v-1.3
		C997.9,559.4,1000.7,556.6,1004.1,556.6z"/>
                    <line class="st0" x1="1031.1" y1="566.9" x2="1031.1" y2="579"/>
                    <line class="st0" x1="1031.1" y1="556.6" x2="1031.1" y2="561.4"/>
                    <path class="st0" d="M1028.3,564.1C1028.3,564.1,1028.3,564.1,1028.3,564.1c0,1.6,1.2,2.8,2.7,2.8c1.5,0,2.7-1.2,2.7-2.7
		c0,0,0,0,0,0l3.4,0v14.8h-12.3v-14.8H1028.3z"/>
                    <path class="st0" d="M1031.1,556.6c3.4,0,6.2,2.8,6.2,6.2v1.3h-3.4c0-1.5-1.2-2.7-2.7-2.7c-1.5,0-2.7,1.2-2.7,2.7h-3.4v-1.3
		C1024.9,559.4,1027.6,556.6,1031.1,556.6z"/>
                    <line class="st0" x1="1047.8" y1="513.7" x2="932.9" y2="513.7"/>
                    <path class="st0" d="M932.9,513.7c-14.3,0-25.8,11.6-25.8,25.8"/>
                </g>
                <g id="street_lighting">
                    <g id="lamp_9_">
                        <g>
                            <path class="st0" d="M634.9,643c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2"/>
                            <g>
                                <circle class="st1" cx="634.9" cy="643" r="1.4"/>
                            </g>
                            <g>
                                <circle class="st1" cx="622.5" cy="643" r="1.4"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="628.7" y1="640.2" x2="628.7" y2="666.3"/>
                            <g>
                                <circle class="st1" cx="628.7" cy="640.2" r="1.4"/>
                            </g>
                        </g>
                        <line class="st0" x1="625.8" y1="667.7" x2="631.6" y2="667.7"/>
                    </g>
                    <g id="lamp_8_">
                        <g>
                            <path class="st0" d="M679.3,643c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2"/>
                            <g>
                                <circle class="st1" cx="679.3" cy="643" r="1.4"/>
                            </g>
                            <g>
                                <circle class="st1" cx="666.8" cy="643" r="1.4"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="673" y1="640.2" x2="673" y2="666.3"/>
                            <g>
                                <circle class="st1" cx="673" cy="640.2" r="1.4"/>
                            </g>
                        </g>
                        <line class="st0" x1="670.1" y1="667.7" x2="676" y2="667.7"/>
                    </g>
                    <g id="lamp_7_">
                        <g>
                            <path class="st0" d="M723.6,643c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2"/>
                            <g>
                                <circle class="st1" cx="723.6" cy="643" r="1.4"/>
                            </g>
                            <g>
                                <circle class="st1" cx="711.1" cy="643" r="1.4"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="717.4" y1="640.2" x2="717.4" y2="666.3"/>
                            <g>
                                <circle class="st1" cx="717.4" cy="640.2" r="1.4"/>
                            </g>
                        </g>
                        <line class="st0" x1="714.4" y1="667.7" x2="720.3" y2="667.7"/>
                    </g>
                    <g id="lamp_6_">
                        <g>
                            <path class="st0" d="M767.9,643c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2"/>
                            <g>
                                <circle class="st1" cx="767.9" cy="643" r="1.4"/>
                            </g>
                            <g>
                                <circle class="st1" cx="755.5" cy="643" r="1.4"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="761.7" y1="640.2" x2="761.7" y2="666.3"/>
                            <g>
                                <circle class="st1" cx="761.7" cy="640.2" r="1.4"/>
                            </g>
                        </g>
                        <line class="st0" x1="758.8" y1="667.7" x2="764.6" y2="667.7"/>
                    </g>
                    <g id="lamp_5_">
                        <g>
                            <path class="st0" d="M812.2,643c0,3.4-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2"/>
                            <g>
                                <circle class="st1" cx="812.2" cy="643" r="1.4"/>
                            </g>
                            <g>
                                <circle class="st1" cx="799.8" cy="643" r="1.4"/>
                            </g>
                        </g>
                        <g>
                            <line class="st0" x1="806" y1="640.2" x2="806" y2="666.3"/>
                            <g>
                                <circle class="st1" cx="806" cy="640.2" r="1.4"/>
                            </g>
                        </g>
                        <line class="st0" x1="803.1" y1="667.7" x2="808.9" y2="667.7"/>
                    </g>
                </g>
                <g id="wind_turbine">
                    <line class="st0" x1="1362.6" y1="401.6" x2="1365.8" y2="575.4"/>
                    <line class="st0" x1="1354.2" y1="575.4" x2="1357.4" y2="401.6"/>
                    <g id="wing">
                        <g>
                            <g>
                                <polyline class="st0" points="1370.4,392 1462.5,445.2 1460.8,447.1 1378.4,407.7 				"/>
                            </g>
                            <g>
                                <polyline class="st0" points="1354.4,400.3 1262.3,453.5 1261.5,451.1 1336.8,399.4 				"/>
                            </g>
                            <g>
                                <polyline class="st0" points="1355.2,382.3 1355.2,276 1357.7,276.5 1364.8,367.6 				"/>
                            </g>
                        </g>
                        <circle class="st0" cx="1360" cy="391.6" r="10.4"/>
                        <circle class="st2" cx="1360" cy="391.6" r="115.9"/>
                    </g>
                </g>
                <g id="market_place">
                    <g>
                        <g>
                            <path class="st0" d="M367.7,640.8c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M374.7,640.8c0,1.9-1.6,3.5-3.5,3.5s-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M381.6,640.8c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M388.6,640.8c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M395.5,640.8c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M402.5,640.8c0,1.9-1.6,3.5-3.5,3.5s-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M409.5,640.8c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5"/>
                            <path class="st0" d="M416.4,640.8c0,1.9-1.6,3.5-3.5,3.5c-1.9,0-3.5-1.6-3.5-3.5"/>
                        </g>
                        <g>
                            <line class="st0" x1="364.3" y1="644.3" x2="364.3" y2="671.5"/>
                            <line class="st0" x1="412.9" y1="644.3" x2="412.9" y2="671.5"/>
                        </g>
                        <g>
                            <line class="st0" x1="385.1" y1="646.1" x2="385.1" y2="658"/>
                            <line class="st0" x1="392.1" y1="646.1" x2="392.1" y2="658"/>
                            <line class="st0" x1="385.1" y1="654.5" x2="366.6" y2="654.5"/>
                            <line class="st0" x1="366.6" y1="650" x2="385.1" y2="650"/>
                            <line class="st0" x1="410.6" y1="654.5" x2="392.1" y2="654.5"/>
                            <line class="st0" x1="392.1" y1="650" x2="410.6" y2="650"/>
                        </g>
                        <line class="st0" x1="361.8" y1="658.2" x2="415.4" y2="658.2"/>
                        <line class="st0" x1="361.8" y1="671.5" x2="415.4" y2="671.5"/>
                        <line class="st0" x1="362.4" y1="637.3" x2="414.7" y2="637.3"/>
                    </g>
                    <line class="st0" x1="388.6" y1="637.3" x2="388.6" y2="628.7"/>
                    <polygon class="st0" points="393.5,629.7 388.6,631.1 388.6,628.2 	"/>
                </g>
                <g id="forest">
                    <g>
                        <path class="st0" d="M461.9,648.8c0,8.5-4.2,11.3-9.4,11.3c-5.2,0-9.4-2.8-9.4-11.3c0-8.5,4.2-19.5,9.4-19.5
			C457.6,629.3,461.9,640.3,461.9,648.8z"/>
                        <line class="st0" x1="452.4" y1="639.9" x2="452.4" y2="680.2"/>
                        <line class="st0" x1="452.4" y1="654.8" x2="457.8" y2="649.4"/>
                        <line class="st0" x1="452.4" y1="645.9" x2="449.2" y2="642.6"/>
                        <line class="st0" x1="455.7" y1="678.8" x2="452.4" y2="675.6"/>
                        <line class="st0" x1="449.2" y1="678.8" x2="452.4" y2="675.6"/>
                    </g>
                    <g>
                        <path class="st0" d="M546,648.8c0,8.5-4.2,11.3-9.4,11.3c-5.2,0-9.4-2.8-9.4-11.3c0-8.5,4.2-19.5,9.4-19.5
			C541.8,629.3,546,640.3,546,648.8z"/>
                        <line class="st0" x1="536.5" y1="639.9" x2="536.5" y2="680.2"/>
                        <line class="st0" x1="536.5" y1="654.8" x2="541.9" y2="649.4"/>
                        <line class="st0" x1="536.5" y1="645.9" x2="533.3" y2="642.6"/>
                        <line class="st0" x1="539.8" y1="678.8" x2="536.5" y2="675.6"/>
                        <line class="st0" x1="533.3" y1="678.8" x2="536.5" y2="675.6"/>
                    </g>
                    <g>
                        <path class="st0" d="M505.6,656.9c0,6.6-3.3,8.8-7.3,8.8c-4.1,0-7.3-2.2-7.3-8.8s3.3-15.1,7.3-15.1
			C502.4,641.8,505.6,650.3,505.6,656.9z"/>
                        <line class="st0" x1="498.3" y1="650" x2="498.3" y2="678.4"/>
                        <line class="st0" x1="498.3" y1="659.8" x2="502.5" y2="655.6"/>
                        <line class="st0" x1="500.8" y1="680.2" x2="498.3" y2="677.7"/>
                        <line class="st0" x1="495.8" y1="680.2" x2="498.3" y2="677.7"/>
                    </g>
                    <g>
                        <path class="st0" d="M1453.8,656.9c0,6.6-3.3,8.8-7.3,8.8s-7.3-2.2-7.3-8.8s3.3-15.1,7.3-15.1S1453.8,650.3,1453.8,656.9z"/>
                        <line class="st0" x1="1446.5" y1="650" x2="1446.5" y2="678.4"/>
                        <line class="st0" x1="1446.5" y1="659.8" x2="1450.7" y2="655.6"/>
                        <line class="st0" x1="1449" y1="680.2" x2="1446.5" y2="677.7"/>
                        <line class="st0" x1="1443.9" y1="680.2" x2="1446.5" y2="677.7"/>
                    </g>
                    <g>
                        <path class="st0" d="M329.3,656.9c0,6.6-3.3,8.8-7.3,8.8c-4.1,0-7.3-2.2-7.3-8.8s3.3-15.1,7.3-15.1
			C326.1,641.8,329.3,650.3,329.3,656.9z"/>
                        <line class="st0" x1="322" y1="650" x2="322" y2="678.4"/>
                        <line class="st0" x1="322" y1="659.8" x2="326.2" y2="655.6"/>
                        <line class="st0" x1="324.5" y1="680.2" x2="322" y2="677.7"/>
                        <line class="st0" x1="319.5" y1="680.2" x2="322" y2="677.7"/>
                    </g>
                </g>
                <g id="power_station">
                    <rect x="1186.7" y="575.4" class="st0" width="232.7" height="21.2"/>
                    <rect x="1186.7" y="600.4" class="st0" width="232.7" height="71"/>
                    <rect x="1183.6" y="596.6" class="st0" width="238.9" height="3.7"/>
                    <g>
                        <g>
                            <rect x="1200.5" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1200.5" y1="654.6" x2="1209" y2="654.6"/>
                                <line class="st0" x1="1200.5" y1="647.5" x2="1209" y2="647.5"/>
                                <line class="st0" x1="1200.5" y1="640.3" x2="1209" y2="640.3"/>
                                <line class="st0" x1="1200.5" y1="633.2" x2="1209" y2="633.2"/>
                                <line class="st0" x1="1200.5" y1="626" x2="1209" y2="626"/>
                                <line class="st0" x1="1200.5" y1="618.9" x2="1209" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1209" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1209" y1="654.6" x2="1217.5" y2="654.6"/>
                                <line class="st0" x1="1209" y1="647.5" x2="1217.5" y2="647.5"/>
                                <line class="st0" x1="1209" y1="640.3" x2="1217.5" y2="640.3"/>
                                <line class="st0" x1="1209" y1="633.2" x2="1217.5" y2="633.2"/>
                                <line class="st0" x1="1209" y1="626" x2="1217.5" y2="626"/>
                                <line class="st0" x1="1209" y1="618.9" x2="1217.5" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1217.5" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1217.5" y1="654.6" x2="1226.1" y2="654.6"/>
                                <line class="st0" x1="1217.5" y1="647.5" x2="1226.1" y2="647.5"/>
                                <line class="st0" x1="1217.5" y1="640.3" x2="1226.1" y2="640.3"/>
                                <line class="st0" x1="1217.5" y1="633.2" x2="1226.1" y2="633.2"/>
                                <line class="st0" x1="1217.5" y1="626" x2="1226.1" y2="626"/>
                                <line class="st0" x1="1217.5" y1="618.9" x2="1226.1" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1226.1" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1226.1" y1="654.6" x2="1234.6" y2="654.6"/>
                                <line class="st0" x1="1226.1" y1="647.5" x2="1234.6" y2="647.5"/>
                                <line class="st0" x1="1226.1" y1="640.3" x2="1234.6" y2="640.3"/>
                                <line class="st0" x1="1226.1" y1="633.2" x2="1234.6" y2="633.2"/>
                                <line class="st0" x1="1226.1" y1="626" x2="1234.6" y2="626"/>
                                <line class="st0" x1="1226.1" y1="618.9" x2="1234.6" y2="618.9"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="1248.1" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1248.1" y1="654.6" x2="1256.6" y2="654.6"/>
                                <line class="st0" x1="1248.1" y1="647.5" x2="1256.6" y2="647.5"/>
                                <line class="st0" x1="1248.1" y1="640.3" x2="1256.6" y2="640.3"/>
                                <line class="st0" x1="1248.1" y1="633.2" x2="1256.6" y2="633.2"/>
                                <line class="st0" x1="1248.1" y1="626" x2="1256.6" y2="626"/>
                                <line class="st0" x1="1248.1" y1="618.9" x2="1256.6" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1256.6" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1256.6" y1="654.6" x2="1265.1" y2="654.6"/>
                                <line class="st0" x1="1256.6" y1="647.5" x2="1265.1" y2="647.5"/>
                                <line class="st0" x1="1256.6" y1="640.3" x2="1265.1" y2="640.3"/>
                                <line class="st0" x1="1256.6" y1="633.2" x2="1265.1" y2="633.2"/>
                                <line class="st0" x1="1256.6" y1="626" x2="1265.1" y2="626"/>
                                <line class="st0" x1="1256.6" y1="618.9" x2="1265.1" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1265.1" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1265.1" y1="654.6" x2="1273.7" y2="654.6"/>
                                <line class="st0" x1="1265.1" y1="647.5" x2="1273.7" y2="647.5"/>
                                <line class="st0" x1="1265.1" y1="640.3" x2="1273.7" y2="640.3"/>
                                <line class="st0" x1="1265.1" y1="633.2" x2="1273.7" y2="633.2"/>
                                <line class="st0" x1="1265.1" y1="626" x2="1273.7" y2="626"/>
                                <line class="st0" x1="1265.1" y1="618.9" x2="1273.7" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1273.7" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1273.7" y1="654.6" x2="1282.2" y2="654.6"/>
                                <line class="st0" x1="1273.7" y1="647.5" x2="1282.2" y2="647.5"/>
                                <line class="st0" x1="1273.7" y1="640.3" x2="1282.2" y2="640.3"/>
                                <line class="st0" x1="1273.7" y1="633.2" x2="1282.2" y2="633.2"/>
                                <line class="st0" x1="1273.7" y1="626" x2="1282.2" y2="626"/>
                                <line class="st0" x1="1273.7" y1="618.9" x2="1282.2" y2="618.9"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <rect x="1295.7" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1295.7" y1="654.6" x2="1304.2" y2="654.6"/>
                                <line class="st0" x1="1295.7" y1="647.5" x2="1304.2" y2="647.5"/>
                                <line class="st0" x1="1295.7" y1="640.3" x2="1304.2" y2="640.3"/>
                                <line class="st0" x1="1295.7" y1="633.2" x2="1304.2" y2="633.2"/>
                                <line class="st0" x1="1295.7" y1="626" x2="1304.2" y2="626"/>
                                <line class="st0" x1="1295.7" y1="618.9" x2="1304.2" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1304.2" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1304.2" y1="654.6" x2="1312.7" y2="654.6"/>
                                <line class="st0" x1="1304.2" y1="647.5" x2="1312.7" y2="647.5"/>
                                <line class="st0" x1="1304.2" y1="640.3" x2="1312.7" y2="640.3"/>
                                <line class="st0" x1="1304.2" y1="633.2" x2="1312.7" y2="633.2"/>
                                <line class="st0" x1="1304.2" y1="626" x2="1312.7" y2="626"/>
                                <line class="st0" x1="1304.2" y1="618.9" x2="1312.7" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1312.7" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1312.7" y1="654.6" x2="1321.3" y2="654.6"/>
                                <line class="st0" x1="1312.7" y1="647.5" x2="1321.3" y2="647.5"/>
                                <line class="st0" x1="1312.7" y1="640.3" x2="1321.3" y2="640.3"/>
                                <line class="st0" x1="1312.7" y1="633.2" x2="1321.3" y2="633.2"/>
                                <line class="st0" x1="1312.7" y1="626" x2="1321.3" y2="626"/>
                                <line class="st0" x1="1312.7" y1="618.9" x2="1321.3" y2="618.9"/>
                            </g>
                        </g>
                        <g>
                            <rect x="1321.3" y="611.5" class="st0" width="8.5" height="50.6"/>
                            <g>
                                <line class="st0" x1="1321.3" y1="654.6" x2="1329.8" y2="654.6"/>
                                <line class="st0" x1="1321.3" y1="647.5" x2="1329.8" y2="647.5"/>
                                <line class="st0" x1="1321.3" y1="640.3" x2="1329.8" y2="640.3"/>
                                <line class="st0" x1="1321.3" y1="633.2" x2="1329.8" y2="633.2"/>
                                <line class="st0" x1="1321.3" y1="626" x2="1329.8" y2="626"/>
                                <line class="st0" x1="1321.3" y1="618.9" x2="1329.8" y2="618.9"/>
                            </g>
                        </g>
                    </g>
                    <rect x="1374" y="639.5" class="st0" width="20.7" height="31.8"/>
                    <rect x="1353.3" y="639.5" class="st0" width="20.7" height="31.8"/>
                    <line class="st0" x1="1399.6" y1="639.5" x2="1348.4" y2="639.5"/>
                </g>
                <g id="skyscraper">
                    <polyline class="st0" points="1106.8,424 1106.8,263.2 1200.5,263.2 1200.5,571 	"/>
                    <g>
                        <rect x="1116.5" y="274.4" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="274.4" x2="1185.8" y2="277.9"/>
                        <line class="st0" x1="1121.9" y1="277.9" x2="1121.9" y2="274.4"/>
                        <line class="st0" x1="1127.2" y1="277.9" x2="1127.2" y2="274.4"/>
                        <line class="st0" x1="1132.6" y1="277.9" x2="1132.6" y2="274.4"/>
                        <line class="st0" x1="1137.9" y1="277.9" x2="1137.9" y2="274.4"/>
                        <line class="st0" x1="1143.2" y1="277.9" x2="1143.2" y2="274.4"/>
                        <line class="st0" x1="1148.5" y1="277.9" x2="1148.5" y2="274.4"/>
                        <line class="st0" x1="1153.8" y1="277.9" x2="1153.8" y2="274.4"/>
                        <line class="st0" x1="1159.2" y1="277.9" x2="1159.2" y2="274.4"/>
                        <line class="st0" x1="1164.5" y1="277.9" x2="1164.5" y2="274.4"/>
                        <line class="st0" x1="1169.8" y1="277.9" x2="1169.8" y2="274.4"/>
                        <line class="st0" x1="1175.1" y1="277.9" x2="1175.1" y2="274.4"/>
                        <line class="st0" x1="1180.5" y1="277.9" x2="1180.5" y2="274.4"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="282.1" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="282.1" x2="1185.8" y2="285.6"/>
                        <line class="st0" x1="1121.9" y1="285.6" x2="1121.9" y2="282.1"/>
                        <line class="st0" x1="1127.2" y1="285.6" x2="1127.2" y2="282.1"/>
                        <line class="st0" x1="1132.6" y1="285.6" x2="1132.6" y2="282.1"/>
                        <line class="st0" x1="1137.9" y1="285.6" x2="1137.9" y2="282.1"/>
                        <line class="st0" x1="1143.2" y1="285.6" x2="1143.2" y2="282.1"/>
                        <line class="st0" x1="1148.5" y1="285.6" x2="1148.5" y2="282.1"/>
                        <line class="st0" x1="1153.8" y1="285.6" x2="1153.8" y2="282.1"/>
                        <line class="st0" x1="1159.2" y1="285.6" x2="1159.2" y2="282.1"/>
                        <line class="st0" x1="1164.5" y1="285.6" x2="1164.5" y2="282.1"/>
                        <line class="st0" x1="1169.8" y1="285.6" x2="1169.8" y2="282.1"/>
                        <line class="st0" x1="1175.1" y1="285.6" x2="1175.1" y2="282.1"/>
                        <line class="st0" x1="1180.5" y1="285.6" x2="1180.5" y2="282.1"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="289.8" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="289.8" x2="1185.8" y2="293.3"/>
                        <line class="st0" x1="1121.9" y1="293.3" x2="1121.9" y2="289.8"/>
                        <line class="st0" x1="1127.2" y1="293.3" x2="1127.2" y2="289.8"/>
                        <line class="st0" x1="1132.6" y1="293.3" x2="1132.6" y2="289.8"/>
                        <line class="st0" x1="1137.9" y1="293.3" x2="1137.9" y2="289.8"/>
                        <line class="st0" x1="1143.2" y1="293.3" x2="1143.2" y2="289.8"/>
                        <line class="st0" x1="1148.5" y1="293.3" x2="1148.5" y2="289.8"/>
                        <line class="st0" x1="1153.8" y1="293.3" x2="1153.8" y2="289.8"/>
                        <line class="st0" x1="1159.2" y1="293.3" x2="1159.2" y2="289.8"/>
                        <line class="st0" x1="1164.5" y1="293.3" x2="1164.5" y2="289.8"/>
                        <line class="st0" x1="1169.8" y1="293.3" x2="1169.8" y2="289.8"/>
                        <line class="st0" x1="1175.1" y1="293.3" x2="1175.1" y2="289.8"/>
                        <line class="st0" x1="1180.5" y1="293.3" x2="1180.5" y2="289.8"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="297.5" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="297.5" x2="1185.8" y2="301.1"/>
                        <line class="st0" x1="1121.9" y1="301.1" x2="1121.9" y2="297.5"/>
                        <line class="st0" x1="1127.2" y1="301.1" x2="1127.2" y2="297.5"/>
                        <line class="st0" x1="1132.6" y1="301.1" x2="1132.6" y2="297.5"/>
                        <line class="st0" x1="1137.9" y1="301.1" x2="1137.9" y2="297.5"/>
                        <line class="st0" x1="1143.2" y1="301.1" x2="1143.2" y2="297.5"/>
                        <line class="st0" x1="1148.5" y1="301.1" x2="1148.5" y2="297.5"/>
                        <line class="st0" x1="1153.8" y1="301.1" x2="1153.8" y2="297.5"/>
                        <line class="st0" x1="1159.2" y1="301.1" x2="1159.2" y2="297.5"/>
                        <line class="st0" x1="1164.5" y1="301.1" x2="1164.5" y2="297.5"/>
                        <line class="st0" x1="1169.8" y1="301.1" x2="1169.8" y2="297.5"/>
                        <line class="st0" x1="1175.1" y1="301.1" x2="1175.1" y2="297.5"/>
                        <line class="st0" x1="1180.5" y1="301.1" x2="1180.5" y2="297.5"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="305.2" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="305.2" x2="1185.8" y2="308.8"/>
                        <line class="st0" x1="1121.9" y1="308.8" x2="1121.9" y2="305.2"/>
                        <line class="st0" x1="1127.2" y1="308.8" x2="1127.2" y2="305.2"/>
                        <line class="st0" x1="1132.6" y1="308.8" x2="1132.6" y2="305.2"/>
                        <line class="st0" x1="1137.9" y1="308.8" x2="1137.9" y2="305.2"/>
                        <line class="st0" x1="1143.2" y1="308.8" x2="1143.2" y2="305.2"/>
                        <line class="st0" x1="1148.5" y1="308.8" x2="1148.5" y2="305.2"/>
                        <line class="st0" x1="1153.8" y1="308.8" x2="1153.8" y2="305.2"/>
                        <line class="st0" x1="1159.2" y1="308.8" x2="1159.2" y2="305.2"/>
                        <line class="st0" x1="1164.5" y1="308.8" x2="1164.5" y2="305.2"/>
                        <line class="st0" x1="1169.8" y1="308.8" x2="1169.8" y2="305.2"/>
                        <line class="st0" x1="1175.1" y1="308.8" x2="1175.1" y2="305.2"/>
                        <line class="st0" x1="1180.5" y1="308.8" x2="1180.5" y2="305.2"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="313" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="313" x2="1185.8" y2="316.5"/>
                        <line class="st0" x1="1121.9" y1="316.5" x2="1121.9" y2="313"/>
                        <line class="st0" x1="1127.2" y1="316.5" x2="1127.2" y2="313"/>
                        <line class="st0" x1="1132.6" y1="316.5" x2="1132.6" y2="313"/>
                        <line class="st0" x1="1137.9" y1="316.5" x2="1137.9" y2="313"/>
                        <line class="st0" x1="1143.2" y1="316.5" x2="1143.2" y2="313"/>
                        <line class="st0" x1="1148.5" y1="316.5" x2="1148.5" y2="313"/>
                        <line class="st0" x1="1153.8" y1="316.5" x2="1153.8" y2="313"/>
                        <line class="st0" x1="1159.2" y1="316.5" x2="1159.2" y2="313"/>
                        <line class="st0" x1="1164.5" y1="316.5" x2="1164.5" y2="313"/>
                        <line class="st0" x1="1169.8" y1="316.5" x2="1169.8" y2="313"/>
                        <line class="st0" x1="1175.1" y1="316.5" x2="1175.1" y2="313"/>
                        <line class="st0" x1="1180.5" y1="316.5" x2="1180.5" y2="313"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="320.7" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="320.7" x2="1185.8" y2="324.2"/>
                        <line class="st0" x1="1121.9" y1="324.2" x2="1121.9" y2="320.7"/>
                        <line class="st0" x1="1127.2" y1="324.2" x2="1127.2" y2="320.7"/>
                        <line class="st0" x1="1132.6" y1="324.2" x2="1132.6" y2="320.7"/>
                        <line class="st0" x1="1137.9" y1="324.2" x2="1137.9" y2="320.7"/>
                        <line class="st0" x1="1143.2" y1="324.2" x2="1143.2" y2="320.7"/>
                        <line class="st0" x1="1148.5" y1="324.2" x2="1148.5" y2="320.7"/>
                        <line class="st0" x1="1153.8" y1="324.2" x2="1153.8" y2="320.7"/>
                        <line class="st0" x1="1159.2" y1="324.2" x2="1159.2" y2="320.7"/>
                        <line class="st0" x1="1164.5" y1="324.2" x2="1164.5" y2="320.7"/>
                        <line class="st0" x1="1169.8" y1="324.2" x2="1169.8" y2="320.7"/>
                        <line class="st0" x1="1175.1" y1="324.2" x2="1175.1" y2="320.7"/>
                        <line class="st0" x1="1180.5" y1="324.2" x2="1180.5" y2="320.7"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="328.4" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="328.4" x2="1185.8" y2="331.9"/>
                        <line class="st0" x1="1121.9" y1="331.9" x2="1121.9" y2="328.4"/>
                        <line class="st0" x1="1127.2" y1="331.9" x2="1127.2" y2="328.4"/>
                        <line class="st0" x1="1132.6" y1="331.9" x2="1132.6" y2="328.4"/>
                        <line class="st0" x1="1137.9" y1="331.9" x2="1137.9" y2="328.4"/>
                        <line class="st0" x1="1143.2" y1="331.9" x2="1143.2" y2="328.4"/>
                        <line class="st0" x1="1148.5" y1="331.9" x2="1148.5" y2="328.4"/>
                        <line class="st0" x1="1153.8" y1="331.9" x2="1153.8" y2="328.4"/>
                        <line class="st0" x1="1159.2" y1="331.9" x2="1159.2" y2="328.4"/>
                        <line class="st0" x1="1164.5" y1="331.9" x2="1164.5" y2="328.4"/>
                        <line class="st0" x1="1169.8" y1="331.9" x2="1169.8" y2="328.4"/>
                        <line class="st0" x1="1175.1" y1="331.9" x2="1175.1" y2="328.4"/>
                        <line class="st0" x1="1180.5" y1="331.9" x2="1180.5" y2="328.4"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="336.1" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="336.1" x2="1185.8" y2="339.6"/>
                        <line class="st0" x1="1121.9" y1="339.6" x2="1121.9" y2="336.1"/>
                        <line class="st0" x1="1127.2" y1="339.6" x2="1127.2" y2="336.1"/>
                        <line class="st0" x1="1132.6" y1="339.6" x2="1132.6" y2="336.1"/>
                        <line class="st0" x1="1137.9" y1="339.6" x2="1137.9" y2="336.1"/>
                        <line class="st0" x1="1143.2" y1="339.6" x2="1143.2" y2="336.1"/>
                        <line class="st0" x1="1148.5" y1="339.6" x2="1148.5" y2="336.1"/>
                        <line class="st0" x1="1153.8" y1="339.6" x2="1153.8" y2="336.1"/>
                        <line class="st0" x1="1159.2" y1="339.6" x2="1159.2" y2="336.1"/>
                        <line class="st0" x1="1164.5" y1="339.6" x2="1164.5" y2="336.1"/>
                        <line class="st0" x1="1169.8" y1="339.6" x2="1169.8" y2="336.1"/>
                        <line class="st0" x1="1175.1" y1="339.6" x2="1175.1" y2="336.1"/>
                        <line class="st0" x1="1180.5" y1="339.6" x2="1180.5" y2="336.1"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="343.8" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="343.8" x2="1185.8" y2="347.3"/>
                        <line class="st0" x1="1121.9" y1="347.3" x2="1121.9" y2="343.8"/>
                        <line class="st0" x1="1127.2" y1="347.3" x2="1127.2" y2="343.8"/>
                        <line class="st0" x1="1132.6" y1="347.3" x2="1132.6" y2="343.8"/>
                        <line class="st0" x1="1137.9" y1="347.3" x2="1137.9" y2="343.8"/>
                        <line class="st0" x1="1143.2" y1="347.3" x2="1143.2" y2="343.8"/>
                        <line class="st0" x1="1148.5" y1="347.3" x2="1148.5" y2="343.8"/>
                        <line class="st0" x1="1153.8" y1="347.3" x2="1153.8" y2="343.8"/>
                        <line class="st0" x1="1159.2" y1="347.3" x2="1159.2" y2="343.8"/>
                        <line class="st0" x1="1164.5" y1="347.3" x2="1164.5" y2="343.8"/>
                        <line class="st0" x1="1169.8" y1="347.3" x2="1169.8" y2="343.8"/>
                        <line class="st0" x1="1175.1" y1="347.3" x2="1175.1" y2="343.8"/>
                        <line class="st0" x1="1180.5" y1="347.3" x2="1180.5" y2="343.8"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="351.5" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="351.5" x2="1185.8" y2="355"/>
                        <line class="st0" x1="1121.9" y1="355" x2="1121.9" y2="351.5"/>
                        <line class="st0" x1="1127.2" y1="355" x2="1127.2" y2="351.5"/>
                        <line class="st0" x1="1132.6" y1="355" x2="1132.6" y2="351.5"/>
                        <line class="st0" x1="1137.9" y1="355" x2="1137.9" y2="351.5"/>
                        <line class="st0" x1="1143.2" y1="355" x2="1143.2" y2="351.5"/>
                        <line class="st0" x1="1148.5" y1="355" x2="1148.5" y2="351.5"/>
                        <line class="st0" x1="1153.8" y1="355" x2="1153.8" y2="351.5"/>
                        <line class="st0" x1="1159.2" y1="355" x2="1159.2" y2="351.5"/>
                        <line class="st0" x1="1164.5" y1="355" x2="1164.5" y2="351.5"/>
                        <line class="st0" x1="1169.8" y1="355" x2="1169.8" y2="351.5"/>
                        <line class="st0" x1="1175.1" y1="355" x2="1175.1" y2="351.5"/>
                        <line class="st0" x1="1180.5" y1="355" x2="1180.5" y2="351.5"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="359.2" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="359.2" x2="1185.8" y2="362.8"/>
                        <line class="st0" x1="1121.9" y1="362.8" x2="1121.9" y2="359.2"/>
                        <line class="st0" x1="1127.2" y1="362.8" x2="1127.2" y2="359.2"/>
                        <line class="st0" x1="1132.6" y1="362.8" x2="1132.6" y2="359.2"/>
                        <line class="st0" x1="1137.9" y1="362.8" x2="1137.9" y2="359.2"/>
                        <line class="st0" x1="1143.2" y1="362.8" x2="1143.2" y2="359.2"/>
                        <line class="st0" x1="1148.5" y1="362.8" x2="1148.5" y2="359.2"/>
                        <line class="st0" x1="1153.8" y1="362.8" x2="1153.8" y2="359.2"/>
                        <line class="st0" x1="1159.2" y1="362.8" x2="1159.2" y2="359.2"/>
                        <line class="st0" x1="1164.5" y1="362.8" x2="1164.5" y2="359.2"/>
                        <line class="st0" x1="1169.8" y1="362.8" x2="1169.8" y2="359.2"/>
                        <line class="st0" x1="1175.1" y1="362.8" x2="1175.1" y2="359.2"/>
                        <line class="st0" x1="1180.5" y1="362.8" x2="1180.5" y2="359.2"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="366.9" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="366.9" x2="1185.8" y2="370.5"/>
                        <line class="st0" x1="1121.9" y1="370.5" x2="1121.9" y2="366.9"/>
                        <line class="st0" x1="1127.2" y1="370.5" x2="1127.2" y2="366.9"/>
                        <line class="st0" x1="1132.6" y1="370.5" x2="1132.6" y2="366.9"/>
                        <line class="st0" x1="1137.9" y1="370.5" x2="1137.9" y2="366.9"/>
                        <line class="st0" x1="1143.2" y1="370.5" x2="1143.2" y2="366.9"/>
                        <line class="st0" x1="1148.5" y1="370.5" x2="1148.5" y2="366.9"/>
                        <line class="st0" x1="1153.8" y1="370.5" x2="1153.8" y2="366.9"/>
                        <line class="st0" x1="1159.2" y1="370.5" x2="1159.2" y2="366.9"/>
                        <line class="st0" x1="1164.5" y1="370.5" x2="1164.5" y2="366.9"/>
                        <line class="st0" x1="1169.8" y1="370.5" x2="1169.8" y2="366.9"/>
                        <line class="st0" x1="1175.1" y1="370.5" x2="1175.1" y2="366.9"/>
                        <line class="st0" x1="1180.5" y1="370.5" x2="1180.5" y2="366.9"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="374.7" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="374.7" x2="1185.8" y2="378.2"/>
                        <line class="st0" x1="1121.9" y1="378.2" x2="1121.9" y2="374.7"/>
                        <line class="st0" x1="1127.2" y1="378.2" x2="1127.2" y2="374.7"/>
                        <line class="st0" x1="1132.6" y1="378.2" x2="1132.6" y2="374.7"/>
                        <line class="st0" x1="1137.9" y1="378.2" x2="1137.9" y2="374.7"/>
                        <line class="st0" x1="1143.2" y1="378.2" x2="1143.2" y2="374.7"/>
                        <line class="st0" x1="1148.5" y1="378.2" x2="1148.5" y2="374.7"/>
                        <line class="st0" x1="1153.8" y1="378.2" x2="1153.8" y2="374.7"/>
                        <line class="st0" x1="1159.2" y1="378.2" x2="1159.2" y2="374.7"/>
                        <line class="st0" x1="1164.5" y1="378.2" x2="1164.5" y2="374.7"/>
                        <line class="st0" x1="1169.8" y1="378.2" x2="1169.8" y2="374.7"/>
                        <line class="st0" x1="1175.1" y1="378.2" x2="1175.1" y2="374.7"/>
                        <line class="st0" x1="1180.5" y1="378.2" x2="1180.5" y2="374.7"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="382.4" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="382.4" x2="1185.8" y2="385.9"/>
                        <line class="st0" x1="1121.9" y1="385.9" x2="1121.9" y2="382.4"/>
                        <line class="st0" x1="1127.2" y1="385.9" x2="1127.2" y2="382.4"/>
                        <line class="st0" x1="1132.6" y1="385.9" x2="1132.6" y2="382.4"/>
                        <line class="st0" x1="1137.9" y1="385.9" x2="1137.9" y2="382.4"/>
                        <line class="st0" x1="1143.2" y1="385.9" x2="1143.2" y2="382.4"/>
                        <line class="st0" x1="1148.5" y1="385.9" x2="1148.5" y2="382.4"/>
                        <line class="st0" x1="1153.8" y1="385.9" x2="1153.8" y2="382.4"/>
                        <line class="st0" x1="1159.2" y1="385.9" x2="1159.2" y2="382.4"/>
                        <line class="st0" x1="1164.5" y1="385.9" x2="1164.5" y2="382.4"/>
                        <line class="st0" x1="1169.8" y1="385.9" x2="1169.8" y2="382.4"/>
                        <line class="st0" x1="1175.1" y1="385.9" x2="1175.1" y2="382.4"/>
                        <line class="st0" x1="1180.5" y1="385.9" x2="1180.5" y2="382.4"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="390.1" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="390.1" x2="1185.8" y2="393.6"/>
                        <line class="st0" x1="1121.9" y1="393.6" x2="1121.9" y2="390.1"/>
                        <line class="st0" x1="1127.2" y1="393.6" x2="1127.2" y2="390.1"/>
                        <line class="st0" x1="1132.6" y1="393.6" x2="1132.6" y2="390.1"/>
                        <line class="st0" x1="1137.9" y1="393.6" x2="1137.9" y2="390.1"/>
                        <line class="st0" x1="1143.2" y1="393.6" x2="1143.2" y2="390.1"/>
                        <line class="st0" x1="1148.5" y1="393.6" x2="1148.5" y2="390.1"/>
                        <line class="st0" x1="1153.8" y1="393.6" x2="1153.8" y2="390.1"/>
                        <line class="st0" x1="1159.2" y1="393.6" x2="1159.2" y2="390.1"/>
                        <line class="st0" x1="1164.5" y1="393.6" x2="1164.5" y2="390.1"/>
                        <line class="st0" x1="1169.8" y1="393.6" x2="1169.8" y2="390.1"/>
                        <line class="st0" x1="1175.1" y1="393.6" x2="1175.1" y2="390.1"/>
                        <line class="st0" x1="1180.5" y1="393.6" x2="1180.5" y2="390.1"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="397.8" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="397.8" x2="1185.8" y2="401.3"/>
                        <line class="st0" x1="1121.9" y1="401.3" x2="1121.9" y2="397.8"/>
                        <line class="st0" x1="1127.2" y1="401.3" x2="1127.2" y2="397.8"/>
                        <line class="st0" x1="1132.6" y1="401.3" x2="1132.6" y2="397.8"/>
                        <line class="st0" x1="1137.9" y1="401.3" x2="1137.9" y2="397.8"/>
                        <line class="st0" x1="1143.2" y1="401.3" x2="1143.2" y2="397.8"/>
                        <line class="st0" x1="1148.5" y1="401.3" x2="1148.5" y2="397.8"/>
                        <line class="st0" x1="1153.8" y1="401.3" x2="1153.8" y2="397.8"/>
                        <line class="st0" x1="1159.2" y1="401.3" x2="1159.2" y2="397.8"/>
                        <line class="st0" x1="1164.5" y1="401.3" x2="1164.5" y2="397.8"/>
                        <line class="st0" x1="1169.8" y1="401.3" x2="1169.8" y2="397.8"/>
                        <line class="st0" x1="1175.1" y1="401.3" x2="1175.1" y2="397.8"/>
                        <line class="st0" x1="1180.5" y1="401.3" x2="1180.5" y2="397.8"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="405.5" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="405.5" x2="1185.8" y2="409"/>
                        <line class="st0" x1="1121.9" y1="409" x2="1121.9" y2="405.5"/>
                        <line class="st0" x1="1127.2" y1="409" x2="1127.2" y2="405.5"/>
                        <line class="st0" x1="1132.6" y1="409" x2="1132.6" y2="405.5"/>
                        <line class="st0" x1="1137.9" y1="409" x2="1137.9" y2="405.5"/>
                        <line class="st0" x1="1143.2" y1="409" x2="1143.2" y2="405.5"/>
                        <line class="st0" x1="1148.5" y1="409" x2="1148.5" y2="405.5"/>
                        <line class="st0" x1="1153.8" y1="409" x2="1153.8" y2="405.5"/>
                        <line class="st0" x1="1159.2" y1="409" x2="1159.2" y2="405.5"/>
                        <line class="st0" x1="1164.5" y1="409" x2="1164.5" y2="405.5"/>
                        <line class="st0" x1="1169.8" y1="409" x2="1169.8" y2="405.5"/>
                        <line class="st0" x1="1175.1" y1="409" x2="1175.1" y2="405.5"/>
                        <line class="st0" x1="1180.5" y1="409" x2="1180.5" y2="405.5"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="413.2" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="413.2" x2="1185.8" y2="416.7"/>
                        <line class="st0" x1="1121.9" y1="416.7" x2="1121.9" y2="413.2"/>
                        <line class="st0" x1="1127.2" y1="416.7" x2="1127.2" y2="413.2"/>
                        <line class="st0" x1="1132.6" y1="416.7" x2="1132.6" y2="413.2"/>
                        <line class="st0" x1="1137.9" y1="416.7" x2="1137.9" y2="413.2"/>
                        <line class="st0" x1="1143.2" y1="416.7" x2="1143.2" y2="413.2"/>
                        <line class="st0" x1="1148.5" y1="416.7" x2="1148.5" y2="413.2"/>
                        <line class="st0" x1="1153.8" y1="416.7" x2="1153.8" y2="413.2"/>
                        <line class="st0" x1="1159.2" y1="416.7" x2="1159.2" y2="413.2"/>
                        <line class="st0" x1="1164.5" y1="416.7" x2="1164.5" y2="413.2"/>
                        <line class="st0" x1="1169.8" y1="416.7" x2="1169.8" y2="413.2"/>
                        <line class="st0" x1="1175.1" y1="416.7" x2="1175.1" y2="413.2"/>
                        <line class="st0" x1="1180.5" y1="416.7" x2="1180.5" y2="413.2"/>
                    </g>
                    <g>
                        <rect x="1116.5" y="420.9" class="st0" width="74.6" height="3.5"/>
                        <line class="st0" x1="1185.8" y1="420.9" x2="1185.8" y2="424.5"/>
                        <line class="st0" x1="1121.9" y1="424.5" x2="1121.9" y2="420.9"/>
                        <line class="st0" x1="1127.2" y1="424.5" x2="1127.2" y2="420.9"/>
                        <line class="st0" x1="1132.6" y1="424.5" x2="1132.6" y2="420.9"/>
                        <line class="st0" x1="1137.9" y1="424.5" x2="1137.9" y2="420.9"/>
                        <line class="st0" x1="1143.2" y1="424.5" x2="1143.2" y2="420.9"/>
                        <line class="st0" x1="1148.5" y1="424.5" x2="1148.5" y2="420.9"/>
                        <line class="st0" x1="1153.8" y1="424.5" x2="1153.8" y2="420.9"/>
                        <line class="st0" x1="1159.2" y1="424.5" x2="1159.2" y2="420.9"/>
                        <line class="st0" x1="1164.5" y1="424.5" x2="1164.5" y2="420.9"/>
                        <line class="st0" x1="1169.8" y1="424.5" x2="1169.8" y2="420.9"/>
                        <line class="st0" x1="1175.1" y1="424.5" x2="1175.1" y2="420.9"/>
                        <line class="st0" x1="1180.5" y1="424.5" x2="1180.5" y2="420.9"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1135.9,428.6 1191.1,428.6 1191.1,432.2 1137.6,432.2 		"/>
                        <line class="st0" x1="1185.8" y1="428.6" x2="1185.8" y2="432.2"/>
                        <line class="st0" x1="1143.2" y1="432.2" x2="1143.2" y2="428.6"/>
                        <line class="st0" x1="1148.5" y1="432.2" x2="1148.5" y2="428.6"/>
                        <line class="st0" x1="1153.8" y1="432.2" x2="1153.8" y2="428.6"/>
                        <line class="st0" x1="1159.2" y1="432.2" x2="1159.2" y2="428.6"/>
                        <line class="st0" x1="1164.5" y1="432.2" x2="1164.5" y2="428.6"/>
                        <line class="st0" x1="1169.8" y1="432.2" x2="1169.8" y2="428.6"/>
                        <line class="st0" x1="1175.1" y1="432.2" x2="1175.1" y2="428.6"/>
                        <line class="st0" x1="1180.5" y1="432.2" x2="1180.5" y2="428.6"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1139.4,436.4 1191.1,436.4 1191.1,439.9 1141.2,439.9 		"/>
                        <line class="st0" x1="1185.8" y1="436.4" x2="1185.8" y2="439.9"/>
                        <line class="st0" x1="1143.2" y1="439.9" x2="1143.2" y2="436.4"/>
                        <line class="st0" x1="1148.5" y1="439.9" x2="1148.5" y2="436.4"/>
                        <line class="st0" x1="1153.8" y1="439.9" x2="1153.8" y2="436.4"/>
                        <line class="st0" x1="1159.2" y1="439.9" x2="1159.2" y2="436.4"/>
                        <line class="st0" x1="1164.5" y1="439.9" x2="1164.5" y2="436.4"/>
                        <line class="st0" x1="1169.8" y1="439.9" x2="1169.8" y2="436.4"/>
                        <line class="st0" x1="1175.1" y1="439.9" x2="1175.1" y2="436.4"/>
                        <line class="st0" x1="1180.5" y1="439.9" x2="1180.5" y2="436.4"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1142.9,444.1 1191.1,444.1 1191.1,447.6 1144.7,447.6 		"/>
                        <line class="st0" x1="1185.8" y1="444.1" x2="1185.8" y2="447.6"/>
                        <line class="st0" x1="1148.5" y1="447.6" x2="1148.5" y2="444.1"/>
                        <line class="st0" x1="1153.8" y1="447.6" x2="1153.8" y2="444.1"/>
                        <line class="st0" x1="1159.2" y1="447.6" x2="1159.2" y2="444.1"/>
                        <line class="st0" x1="1164.5" y1="447.6" x2="1164.5" y2="444.1"/>
                        <line class="st0" x1="1169.8" y1="447.6" x2="1169.8" y2="444.1"/>
                        <line class="st0" x1="1175.1" y1="447.6" x2="1175.1" y2="444.1"/>
                        <line class="st0" x1="1180.5" y1="447.6" x2="1180.5" y2="444.1"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1148.2,451.8 1191.1,451.8 1191.1,455.3 1148.2,455.3 		"/>
                        <line class="st0" x1="1185.8" y1="451.8" x2="1185.8" y2="455.3"/>
                        <line class="st0" x1="1153.8" y1="455.3" x2="1153.8" y2="451.8"/>
                        <line class="st0" x1="1159.2" y1="455.3" x2="1159.2" y2="451.8"/>
                        <line class="st0" x1="1164.5" y1="455.3" x2="1164.5" y2="451.8"/>
                        <line class="st0" x1="1169.8" y1="455.3" x2="1169.8" y2="451.8"/>
                        <line class="st0" x1="1175.1" y1="455.3" x2="1175.1" y2="451.8"/>
                        <line class="st0" x1="1180.5" y1="455.3" x2="1180.5" y2="451.8"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,459.5 1191.1,459.5 1191.1,463 1144.7,463 		"/>
                        <line class="st0" x1="1185.8" y1="459.5" x2="1185.8" y2="463"/>
                        <line class="st0" x1="1148.5" y1="463" x2="1148.5" y2="459.5"/>
                        <line class="st0" x1="1153.8" y1="463" x2="1153.8" y2="459.5"/>
                        <line class="st0" x1="1159.2" y1="463" x2="1159.2" y2="459.5"/>
                        <line class="st0" x1="1164.5" y1="463" x2="1164.5" y2="459.5"/>
                        <line class="st0" x1="1169.8" y1="463" x2="1169.8" y2="459.5"/>
                        <line class="st0" x1="1175.1" y1="463" x2="1175.1" y2="459.5"/>
                        <line class="st0" x1="1180.5" y1="463" x2="1180.5" y2="459.5"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,467.2 1191.1,467.2 1191.1,470.7 1144.7,470.7 		"/>
                        <line class="st0" x1="1185.8" y1="467.2" x2="1185.8" y2="470.7"/>
                        <line class="st0" x1="1148.5" y1="470.7" x2="1148.5" y2="467.2"/>
                        <line class="st0" x1="1153.8" y1="470.7" x2="1153.8" y2="467.2"/>
                        <line class="st0" x1="1159.2" y1="470.7" x2="1159.2" y2="467.2"/>
                        <line class="st0" x1="1164.5" y1="470.7" x2="1164.5" y2="467.2"/>
                        <line class="st0" x1="1169.8" y1="470.7" x2="1169.8" y2="467.2"/>
                        <line class="st0" x1="1175.1" y1="470.7" x2="1175.1" y2="467.2"/>
                        <line class="st0" x1="1180.5" y1="470.7" x2="1180.5" y2="467.2"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,474.9 1191.1,474.9 1191.1,478.4 1144.7,478.4 		"/>
                        <line class="st0" x1="1185.8" y1="474.9" x2="1185.8" y2="478.4"/>
                        <line class="st0" x1="1148.5" y1="478.4" x2="1148.5" y2="474.9"/>
                        <line class="st0" x1="1153.8" y1="478.4" x2="1153.8" y2="474.9"/>
                        <line class="st0" x1="1159.2" y1="478.4" x2="1159.2" y2="474.9"/>
                        <line class="st0" x1="1164.5" y1="478.4" x2="1164.5" y2="474.9"/>
                        <line class="st0" x1="1169.8" y1="478.4" x2="1169.8" y2="474.9"/>
                        <line class="st0" x1="1175.1" y1="478.4" x2="1175.1" y2="474.9"/>
                        <line class="st0" x1="1180.5" y1="478.4" x2="1180.5" y2="474.9"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,482.6 1191.1,482.6 1191.1,486.2 1144.7,486.2 		"/>
                        <line class="st0" x1="1185.8" y1="482.6" x2="1185.8" y2="486.2"/>
                        <line class="st0" x1="1148.5" y1="486.2" x2="1148.5" y2="482.6"/>
                        <line class="st0" x1="1153.8" y1="486.2" x2="1153.8" y2="482.6"/>
                        <line class="st0" x1="1159.2" y1="486.2" x2="1159.2" y2="482.6"/>
                        <line class="st0" x1="1164.5" y1="486.2" x2="1164.5" y2="482.6"/>
                        <line class="st0" x1="1169.8" y1="486.2" x2="1169.8" y2="482.6"/>
                        <line class="st0" x1="1175.1" y1="486.2" x2="1175.1" y2="482.6"/>
                        <line class="st0" x1="1180.5" y1="486.2" x2="1180.5" y2="482.6"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,490.3 1191.1,490.3 1191.1,493.9 1144.7,493.9 		"/>
                        <line class="st0" x1="1185.8" y1="490.3" x2="1185.8" y2="493.9"/>
                        <line class="st0" x1="1148.5" y1="493.9" x2="1148.5" y2="490.3"/>
                        <line class="st0" x1="1153.8" y1="493.9" x2="1153.8" y2="490.3"/>
                        <line class="st0" x1="1159.2" y1="493.9" x2="1159.2" y2="490.3"/>
                        <line class="st0" x1="1164.5" y1="493.9" x2="1164.5" y2="490.3"/>
                        <line class="st0" x1="1169.8" y1="493.9" x2="1169.8" y2="490.3"/>
                        <line class="st0" x1="1175.1" y1="493.9" x2="1175.1" y2="490.3"/>
                        <line class="st0" x1="1180.5" y1="493.9" x2="1180.5" y2="490.3"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,498.1 1191.1,498.1 1191.1,501.6 1144.7,501.6 		"/>
                        <line class="st0" x1="1185.8" y1="498.1" x2="1185.8" y2="501.6"/>
                        <line class="st0" x1="1148.5" y1="501.6" x2="1148.5" y2="498.1"/>
                        <line class="st0" x1="1153.8" y1="501.6" x2="1153.8" y2="498.1"/>
                        <line class="st0" x1="1159.2" y1="501.6" x2="1159.2" y2="498.1"/>
                        <line class="st0" x1="1164.5" y1="501.6" x2="1164.5" y2="498.1"/>
                        <line class="st0" x1="1169.8" y1="501.6" x2="1169.8" y2="498.1"/>
                        <line class="st0" x1="1175.1" y1="501.6" x2="1175.1" y2="498.1"/>
                        <line class="st0" x1="1180.5" y1="501.6" x2="1180.5" y2="498.1"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,505.8 1191.1,505.8 1191.1,509.3 1144.7,509.3 		"/>
                        <line class="st0" x1="1185.8" y1="505.8" x2="1185.8" y2="509.3"/>
                        <line class="st0" x1="1148.5" y1="509.3" x2="1148.5" y2="505.8"/>
                        <line class="st0" x1="1153.8" y1="509.3" x2="1153.8" y2="505.8"/>
                        <line class="st0" x1="1159.2" y1="509.3" x2="1159.2" y2="505.8"/>
                        <line class="st0" x1="1164.5" y1="509.3" x2="1164.5" y2="505.8"/>
                        <line class="st0" x1="1169.8" y1="509.3" x2="1169.8" y2="505.8"/>
                        <line class="st0" x1="1175.1" y1="509.3" x2="1175.1" y2="505.8"/>
                        <line class="st0" x1="1180.5" y1="509.3" x2="1180.5" y2="505.8"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,513.5 1191.1,513.5 1191.1,517 1144.7,517 		"/>
                        <line class="st0" x1="1185.8" y1="513.5" x2="1185.8" y2="517"/>
                        <line class="st0" x1="1148.5" y1="517" x2="1148.5" y2="513.5"/>
                        <line class="st0" x1="1153.8" y1="517" x2="1153.8" y2="513.5"/>
                        <line class="st0" x1="1159.2" y1="517" x2="1159.2" y2="513.5"/>
                        <line class="st0" x1="1164.5" y1="517" x2="1164.5" y2="513.5"/>
                        <line class="st0" x1="1169.8" y1="517" x2="1169.8" y2="513.5"/>
                        <line class="st0" x1="1175.1" y1="517" x2="1175.1" y2="513.5"/>
                        <line class="st0" x1="1180.5" y1="517" x2="1180.5" y2="513.5"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,521.2 1191.1,521.2 1191.1,524.7 1144.7,524.7 		"/>
                        <line class="st0" x1="1185.8" y1="521.2" x2="1185.8" y2="524.7"/>
                        <line class="st0" x1="1148.5" y1="524.7" x2="1148.5" y2="521.2"/>
                        <line class="st0" x1="1153.8" y1="524.7" x2="1153.8" y2="521.2"/>
                        <line class="st0" x1="1159.2" y1="524.7" x2="1159.2" y2="521.2"/>
                        <line class="st0" x1="1164.5" y1="524.7" x2="1164.5" y2="521.2"/>
                        <line class="st0" x1="1169.8" y1="524.7" x2="1169.8" y2="521.2"/>
                        <line class="st0" x1="1175.1" y1="524.7" x2="1175.1" y2="521.2"/>
                        <line class="st0" x1="1180.5" y1="524.7" x2="1180.5" y2="521.2"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,528.9 1191.1,528.9 1191.1,532.4 1144.7,532.4 		"/>
                        <line class="st0" x1="1185.8" y1="528.9" x2="1185.8" y2="532.4"/>
                        <line class="st0" x1="1148.5" y1="532.4" x2="1148.5" y2="528.9"/>
                        <line class="st0" x1="1153.8" y1="532.4" x2="1153.8" y2="528.9"/>
                        <line class="st0" x1="1159.2" y1="532.4" x2="1159.2" y2="528.9"/>
                        <line class="st0" x1="1164.5" y1="532.4" x2="1164.5" y2="528.9"/>
                        <line class="st0" x1="1169.8" y1="532.4" x2="1169.8" y2="528.9"/>
                        <line class="st0" x1="1175.1" y1="532.4" x2="1175.1" y2="528.9"/>
                        <line class="st0" x1="1180.5" y1="532.4" x2="1180.5" y2="528.9"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,536.6 1191.1,536.6 1191.1,540.1 1144.7,540.1 		"/>
                        <line class="st0" x1="1185.8" y1="536.6" x2="1185.8" y2="540.1"/>
                        <line class="st0" x1="1148.5" y1="540.1" x2="1148.5" y2="536.6"/>
                        <line class="st0" x1="1153.8" y1="540.1" x2="1153.8" y2="536.6"/>
                        <line class="st0" x1="1159.2" y1="540.1" x2="1159.2" y2="536.6"/>
                        <line class="st0" x1="1164.5" y1="540.1" x2="1164.5" y2="536.6"/>
                        <line class="st0" x1="1169.8" y1="540.1" x2="1169.8" y2="536.6"/>
                        <line class="st0" x1="1175.1" y1="540.1" x2="1175.1" y2="536.6"/>
                        <line class="st0" x1="1180.5" y1="540.1" x2="1180.5" y2="536.6"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,544.3 1191.1,544.3 1191.1,547.9 1144.7,547.9 		"/>
                        <line class="st0" x1="1185.8" y1="544.3" x2="1185.8" y2="547.9"/>
                        <line class="st0" x1="1148.5" y1="547.9" x2="1148.5" y2="544.3"/>
                        <line class="st0" x1="1153.8" y1="547.9" x2="1153.8" y2="544.3"/>
                        <line class="st0" x1="1159.2" y1="547.9" x2="1159.2" y2="544.3"/>
                        <line class="st0" x1="1164.5" y1="547.9" x2="1164.5" y2="544.3"/>
                        <line class="st0" x1="1169.8" y1="547.9" x2="1169.8" y2="544.3"/>
                        <line class="st0" x1="1175.1" y1="547.9" x2="1175.1" y2="544.3"/>
                        <line class="st0" x1="1180.5" y1="547.9" x2="1180.5" y2="544.3"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,552 1191.1,552 1191.1,555.6 1144.7,555.6 		"/>
                        <line class="st0" x1="1185.8" y1="552" x2="1185.8" y2="555.6"/>
                        <line class="st0" x1="1148.5" y1="555.6" x2="1148.5" y2="552"/>
                        <line class="st0" x1="1153.8" y1="555.6" x2="1153.8" y2="552"/>
                        <line class="st0" x1="1159.2" y1="555.6" x2="1159.2" y2="552"/>
                        <line class="st0" x1="1164.5" y1="555.6" x2="1164.5" y2="552"/>
                        <line class="st0" x1="1169.8" y1="555.6" x2="1169.8" y2="552"/>
                        <line class="st0" x1="1175.1" y1="555.6" x2="1175.1" y2="552"/>
                        <line class="st0" x1="1180.5" y1="555.6" x2="1180.5" y2="552"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,559.8 1191.1,559.8 1191.1,563.3 1144.7,563.3 		"/>
                        <line class="st0" x1="1185.8" y1="559.8" x2="1185.8" y2="563.3"/>
                        <line class="st0" x1="1148.5" y1="563.3" x2="1148.5" y2="559.8"/>
                        <line class="st0" x1="1153.8" y1="563.3" x2="1153.8" y2="559.8"/>
                        <line class="st0" x1="1159.2" y1="563.3" x2="1159.2" y2="559.8"/>
                        <line class="st0" x1="1164.5" y1="563.3" x2="1164.5" y2="559.8"/>
                        <line class="st0" x1="1169.8" y1="563.3" x2="1169.8" y2="559.8"/>
                        <line class="st0" x1="1175.1" y1="563.3" x2="1175.1" y2="559.8"/>
                        <line class="st0" x1="1180.5" y1="563.3" x2="1180.5" y2="559.8"/>
                    </g>
                    <g>
                        <polyline class="st0" points="1144.7,567.5 1191.1,567.5 1191.1,571 1144.7,571 		"/>
                        <line class="st0" x1="1185.8" y1="567.5" x2="1185.8" y2="571"/>
                        <line class="st0" x1="1148.5" y1="571" x2="1148.5" y2="567.5"/>
                        <line class="st0" x1="1153.8" y1="571" x2="1153.8" y2="567.5"/>
                        <line class="st0" x1="1159.2" y1="571" x2="1159.2" y2="567.5"/>
                        <line class="st0" x1="1164.5" y1="571" x2="1164.5" y2="567.5"/>
                        <line class="st0" x1="1169.8" y1="571" x2="1169.8" y2="567.5"/>
                        <line class="st0" x1="1175.1" y1="571" x2="1175.1" y2="567.5"/>
                        <line class="st0" x1="1180.5" y1="571" x2="1180.5" y2="567.5"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="578.7" x2="1144.7" y2="578.7"/>
                        <line class="st0" x1="1144.7" y1="575.2" x2="1184.1" y2="575.2"/>
                        <line class="st0" x1="1148.5" y1="578.7" x2="1148.5" y2="575.2"/>
                        <line class="st0" x1="1153.8" y1="578.7" x2="1153.8" y2="575.2"/>
                        <line class="st0" x1="1159.2" y1="578.7" x2="1159.2" y2="575.2"/>
                        <line class="st0" x1="1164.5" y1="578.7" x2="1164.5" y2="575.2"/>
                        <line class="st0" x1="1169.8" y1="578.7" x2="1169.8" y2="575.2"/>
                        <line class="st0" x1="1175.1" y1="578.7" x2="1175.1" y2="575.2"/>
                        <line class="st0" x1="1180.5" y1="578.7" x2="1180.5" y2="575.2"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="586.4" x2="1144.7" y2="586.4"/>
                        <line class="st0" x1="1144.7" y1="582.9" x2="1184.1" y2="582.9"/>
                        <line class="st0" x1="1148.5" y1="586.4" x2="1148.5" y2="582.9"/>
                        <line class="st0" x1="1153.8" y1="586.4" x2="1153.8" y2="582.9"/>
                        <line class="st0" x1="1159.2" y1="586.4" x2="1159.2" y2="582.9"/>
                        <line class="st0" x1="1164.5" y1="586.4" x2="1164.5" y2="582.9"/>
                        <line class="st0" x1="1169.8" y1="586.4" x2="1169.8" y2="582.9"/>
                        <line class="st0" x1="1175.1" y1="586.4" x2="1175.1" y2="582.9"/>
                        <line class="st0" x1="1180.5" y1="586.4" x2="1180.5" y2="582.9"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="594.1" x2="1144.7" y2="594.1"/>
                        <line class="st0" x1="1144.7" y1="590.6" x2="1184.1" y2="590.6"/>
                        <line class="st0" x1="1148.5" y1="594.1" x2="1148.5" y2="590.6"/>
                        <line class="st0" x1="1153.8" y1="594.1" x2="1153.8" y2="590.6"/>
                        <line class="st0" x1="1159.2" y1="594.1" x2="1159.2" y2="590.6"/>
                        <line class="st0" x1="1164.5" y1="594.1" x2="1164.5" y2="590.6"/>
                        <line class="st0" x1="1169.8" y1="594.1" x2="1169.8" y2="590.6"/>
                        <line class="st0" x1="1175.1" y1="594.1" x2="1175.1" y2="590.6"/>
                        <line class="st0" x1="1180.5" y1="594.1" x2="1180.5" y2="590.6"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="601.8" x2="1144.7" y2="601.8"/>
                        <line class="st0" x1="1144.7" y1="598.3" x2="1182.3" y2="598.3"/>
                        <line class="st0" x1="1148.5" y1="601.8" x2="1148.5" y2="598.3"/>
                        <line class="st0" x1="1153.8" y1="601.8" x2="1153.8" y2="598.3"/>
                        <line class="st0" x1="1159.2" y1="601.8" x2="1159.2" y2="598.3"/>
                        <line class="st0" x1="1164.5" y1="601.8" x2="1164.5" y2="598.3"/>
                        <line class="st0" x1="1169.8" y1="601.8" x2="1169.8" y2="598.3"/>
                        <line class="st0" x1="1175.1" y1="601.8" x2="1175.1" y2="598.3"/>
                        <line class="st0" x1="1180.5" y1="601.8" x2="1180.5" y2="598.3"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="609.6" x2="1144.7" y2="609.6"/>
                        <line class="st0" x1="1144.7" y1="606" x2="1184.1" y2="606"/>
                        <line class="st0" x1="1148.5" y1="609.6" x2="1148.5" y2="606"/>
                        <line class="st0" x1="1153.8" y1="609.6" x2="1153.8" y2="606"/>
                        <line class="st0" x1="1159.2" y1="609.6" x2="1159.2" y2="606"/>
                        <line class="st0" x1="1164.5" y1="609.6" x2="1164.5" y2="606"/>
                        <line class="st0" x1="1169.8" y1="609.6" x2="1169.8" y2="606"/>
                        <line class="st0" x1="1175.1" y1="609.6" x2="1175.1" y2="606"/>
                        <line class="st0" x1="1180.5" y1="609.6" x2="1180.5" y2="606"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="617.3" x2="1144.7" y2="617.3"/>
                        <line class="st0" x1="1144.7" y1="613.7" x2="1184.1" y2="613.7"/>
                        <line class="st0" x1="1148.5" y1="617.3" x2="1148.5" y2="613.7"/>
                        <line class="st0" x1="1153.8" y1="617.3" x2="1153.8" y2="613.7"/>
                        <line class="st0" x1="1159.2" y1="617.3" x2="1159.2" y2="613.7"/>
                        <line class="st0" x1="1164.5" y1="617.3" x2="1164.5" y2="613.7"/>
                        <line class="st0" x1="1169.8" y1="617.3" x2="1169.8" y2="613.7"/>
                        <line class="st0" x1="1175.1" y1="617.3" x2="1175.1" y2="613.7"/>
                        <line class="st0" x1="1180.5" y1="617.3" x2="1180.5" y2="613.7"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="625" x2="1144.7" y2="625"/>
                        <line class="st0" x1="1144.7" y1="621.5" x2="1184.1" y2="621.5"/>
                        <line class="st0" x1="1148.5" y1="625" x2="1148.5" y2="621.5"/>
                        <line class="st0" x1="1153.8" y1="625" x2="1153.8" y2="621.5"/>
                        <line class="st0" x1="1159.2" y1="625" x2="1159.2" y2="621.5"/>
                        <line class="st0" x1="1164.5" y1="625" x2="1164.5" y2="621.5"/>
                        <line class="st0" x1="1169.8" y1="625" x2="1169.8" y2="621.5"/>
                        <line class="st0" x1="1175.1" y1="625" x2="1175.1" y2="621.5"/>
                        <line class="st0" x1="1180.5" y1="625" x2="1180.5" y2="621.5"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="632.7" x2="1144.7" y2="632.7"/>
                        <line class="st0" x1="1144.7" y1="629.2" x2="1184.1" y2="629.2"/>
                        <line class="st0" x1="1148.5" y1="632.7" x2="1148.5" y2="629.2"/>
                        <line class="st0" x1="1153.8" y1="632.7" x2="1153.8" y2="629.2"/>
                        <line class="st0" x1="1159.2" y1="632.7" x2="1159.2" y2="629.2"/>
                        <line class="st0" x1="1164.5" y1="632.7" x2="1164.5" y2="629.2"/>
                        <line class="st0" x1="1169.8" y1="632.7" x2="1169.8" y2="629.2"/>
                        <line class="st0" x1="1175.1" y1="632.7" x2="1175.1" y2="629.2"/>
                        <line class="st0" x1="1180.5" y1="632.7" x2="1180.5" y2="629.2"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="640.4" x2="1148.2" y2="640.4"/>
                        <line class="st0" x1="1144.7" y1="636.9" x2="1184.1" y2="636.9"/>
                        <line class="st0" x1="1148.5" y1="640.4" x2="1148.5" y2="636.9"/>
                        <line class="st0" x1="1153.8" y1="640.4" x2="1153.8" y2="636.9"/>
                        <line class="st0" x1="1159.2" y1="640.4" x2="1159.2" y2="636.9"/>
                        <line class="st0" x1="1164.5" y1="640.4" x2="1164.5" y2="636.9"/>
                        <line class="st0" x1="1169.8" y1="640.4" x2="1169.8" y2="636.9"/>
                        <line class="st0" x1="1175.1" y1="640.4" x2="1175.1" y2="636.9"/>
                        <line class="st0" x1="1180.5" y1="640.4" x2="1180.5" y2="636.9"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="648.1" x2="1144.7" y2="648.1"/>
                        <line class="st0" x1="1144.7" y1="644.6" x2="1184.1" y2="644.6"/>
                        <line class="st0" x1="1148.5" y1="648.1" x2="1148.5" y2="644.6"/>
                        <line class="st0" x1="1153.8" y1="648.1" x2="1153.8" y2="644.6"/>
                        <line class="st0" x1="1159.2" y1="648.1" x2="1159.2" y2="644.6"/>
                        <line class="st0" x1="1164.5" y1="648.1" x2="1164.5" y2="644.6"/>
                        <line class="st0" x1="1169.8" y1="648.1" x2="1169.8" y2="644.6"/>
                        <line class="st0" x1="1175.1" y1="648.1" x2="1175.1" y2="644.6"/>
                        <line class="st0" x1="1180.5" y1="648.1" x2="1180.5" y2="644.6"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="655.8" x2="1144.7" y2="655.8"/>
                        <line class="st0" x1="1144.7" y1="652.3" x2="1184.1" y2="652.3"/>
                        <line class="st0" x1="1148.5" y1="655.8" x2="1148.5" y2="652.3"/>
                        <line class="st0" x1="1153.8" y1="655.8" x2="1153.8" y2="652.3"/>
                        <line class="st0" x1="1159.2" y1="655.8" x2="1159.2" y2="652.3"/>
                        <line class="st0" x1="1164.5" y1="655.8" x2="1164.5" y2="652.3"/>
                        <line class="st0" x1="1169.8" y1="655.8" x2="1169.8" y2="652.3"/>
                        <line class="st0" x1="1175.1" y1="655.8" x2="1175.1" y2="652.3"/>
                        <line class="st0" x1="1180.5" y1="655.8" x2="1180.5" y2="652.3"/>
                    </g>
                    <g>
                        <line class="st0" x1="1184.1" y1="663.5" x2="1144.7" y2="663.5"/>
                        <line class="st0" x1="1144.7" y1="660" x2="1184.1" y2="660"/>
                        <line class="st0" x1="1148.5" y1="663.5" x2="1148.5" y2="660"/>
                        <line class="st0" x1="1153.8" y1="663.5" x2="1153.8" y2="660"/>
                        <line class="st0" x1="1159.2" y1="663.5" x2="1159.2" y2="660"/>
                        <line class="st0" x1="1164.5" y1="663.5" x2="1164.5" y2="660"/>
                        <line class="st0" x1="1169.8" y1="663.5" x2="1169.8" y2="660"/>
                        <line class="st0" x1="1175.1" y1="663.5" x2="1175.1" y2="660"/>
                        <line class="st0" x1="1180.5" y1="663.5" x2="1180.5" y2="660"/>
                    </g>
                    <g>
                        <path class="st3" d="M1166.6,248.2c6.2-0.6,11.1-5.8,11.1-12.2c0-5.9-4.2-10.8-9.7-12c-3.3-4-8.3-6.6-13.9-6.6
			c-7,0-13.1,4.1-16.1,10c-4.7,1.1-8.2,5.3-8.2,10.3c0,5.8,4.8,10.6,10.6,10.6"/>
                        <path class="st3" d="M1164.1,225.3c-2.6-2.6-6.1-4.2-10-4.2c-7.8,0-14.2,6.4-14.2,14.2c0,7.8,6.4,14.2,14.2,14.2
			s14.2-6.4,14.2-14.2l-14.2,0"/>
                    </g>
                    <line class="st3" x1="1154.1" y1="249.6" x2="1154.1" y2="263.2"/>
                </g>
                <g id="zeppelin">
                    <g>
                        <path class="st0" d="M498.3,270.5c-37.2-6.1-63.2-20.5-63.2-37.2c0-22.3,46.2-40.3,103.2-40.3s103.2,18.1,103.2,40.3
			c0,16.7-26.1,31.1-63.3,37.2"/>
                        <path class="st2" d="M578.1,270.5c-12.3,2-25.8,3.1-39.9,3.1c-14.1,0-27.6-1.1-39.9-3.1"/>
                        <path class="st0" d="M438.8,228.2c12.1-8.1,52-14,99.4-14c48.9,0,89.9,6.3,100.5,14.8"/>
                        <path class="st0" d="M638.7,237.7c-10.6,8.5-51.6,14.8-100.5,14.8c-47.4,0-87.3-5.9-99.4-14"/>
                    </g>
                    <g>
                        <path class="st0" d="M502.6,282.8c0.5,1,1.5,1.7,2.7,1.7h65.8c1.1,0,2.2-0.7,2.7-1.7l4.4-12.2h-79.8L502.6,282.8z"/>
                        <line class="st0" x1="513" y1="284.5" x2="513" y2="282.9"/>
                        <line class="st0" x1="563.3" y1="270.6" x2="563.3" y2="284.5"/>
                        <line class="st0" x1="513" y1="272.1" x2="513" y2="270.6"/>
                        <circle class="st0" cx="557.1" cy="277.5" r="2.4"/>
                        <circle class="st0" cx="546.8" cy="277.5" r="2.4"/>
                        <circle class="st0" cx="536.5" cy="277.5" r="2.4"/>
                        <g>
                            <circle class="st0" cx="513" cy="276" r="2.4"/>
                            <path class="st0" d="M515.9,282.9h-5.7c-0.8,0-1.4-0.6-1.4-1.4v-8c0-0.8,0.6-1.4,1.4-1.4h5.7c0.8,0,1.4,0.6,1.4,1.4v8
				C517.3,282.3,516.6,282.9,515.9,282.9z"/>
                        </g>
                        <path class="st0" d="M574.2,281.3h-3.6c-1.2,0-2.2-1-2.2-2.2v-4.6c0-1.2,1-2.2,2.2-2.2h6.8"/>
                    </g>
                    <g>
                        <path class="st3" d="M548.3,244.6c4.6-0.4,8.2-4.3,8.2-8.9c0-4.3-3.1-7.9-7.2-8.8c-2.4-3-6.1-4.9-10.2-4.9c-5.2,0-9.6,3-11.8,7.3
			c-3.4,0.8-6,3.9-6,7.6c0,4.3,3.5,7.8,7.8,7.8"/>
                        <path class="st3" d="M546.5,227.8c-1.9-1.9-4.5-3.1-7.4-3.1c-5.8,0-10.4,4.7-10.4,10.4s4.7,10.4,10.4,10.4s10.4-4.7,10.4-10.4
			l-10.4,0"/>
                    </g>
                </g>
                <line id="groundZero" class="st2" x1="0" y1="671.5" x2="1500" y2="671.5"/>
                <rect id="ZeroRectangle" class="st2" width="1500" height="700"/>
</svg>



        </div>
        <?php endif; ?>
        </section>
        <section class="about container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <?php  if ( is_active_sidebar( 'home-sidebar-01' )  ) : dynamic_sidebar( 'home-sidebar-01' ); endif; ?>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <?php  if ( is_active_sidebar( 'home-sidebar-02' )  ) : dynamic_sidebar( 'home-sidebar-02' ); endif; ?>
                </div>
            </div>
        </section>

        <section id="what_we_do" class="container-fluid lvl2">

            <header>
                <h2 class="section-header">What we do?</h2>
            </header>

            <?php  if ( is_active_sidebar( 'home-sidebar-03' )  ) : dynamic_sidebar( 'home-sidebar-03' ); endif; ?>


            <div class="icon-row">

                <svg  id="e-commerce" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="280px" height="170px" viewBox="0 0 280 170" style="enable-background:new 0 0 280 170;"
                     xml:space="preserve" class="ecommerce-icon wwd-icons">


                        <rect id="ZeroRectangle_1_" class="st1" width="280" height="170"/>

                                <g id="cart">
                                    <polygon class="st0" points="229.4,130.6 175.6,143.9 166.7,107 229.4,107"/>
                                    <circle class="st0" cx="180" cy="162.2" r="6.9"/>
                                    <circle class="st0" cx="220.7" cy="162.2" r="6.9"/>
                                    <path class="st0" d="M147.6,101.3c0-4.8,3.9-8.8,8.8-8.8c4.1,0,7.5,2.8,8.5,6.6l13.5,56.4"/>
                                    <line class="st0" x1="187.4" y1="162.2" x2="213.9" y2="162.2"/>
                                </g>
                                <g id="shop">
                                    <g>
                                        <g>
                                            <path class="st0" d="M61.4,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M70.9,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M80.3,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M89.8,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M99.3,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M108.8,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M118.2,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                            <path class="st0" d="M127.7,95c0,2.6-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7"/>
                                        </g>
                                        <g>
                                            <line class="st0" x1="56.6" y1="99.8" x2="56.6" y2="136.8"/>
                                            <line class="st0" x1="123" y1="99.8" x2="123" y2="136.8"/>
                                        </g>
                                        <g>
                                            <line class="st0" x1="85.1" y1="102.3" x2="85.1" y2="118.4"/>
                                            <line class="st0" x1="94.5" y1="102.3" x2="94.5" y2="118.4"/>
                                            <line class="st0" x1="85.1" y1="113.7" x2="59.8" y2="113.7"/>
                                            <line class="st0" x1="59.8" y1="107.6" x2="85.1" y2="107.6"/>
                                            <line class="st0" x1="119.8" y1="113.7" x2="94.5" y2="113.7"/>
                                            <line class="st0" x1="94.5" y1="107.6" x2="119.8" y2="107.6"/>
                                        </g>
                                        <line class="st0" x1="53.3" y1="118.7" x2="126.3" y2="118.7"/>
                                        <line class="st0" x1="53.3" y1="136.8" x2="126.3" y2="136.8"/>
                                        <line class="st0" x1="54.2" y1="90.3" x2="125.4" y2="90.3"/>
                                    </g>
                                    <line class="st0" x1="89.8" y1="90.3" x2="89.8" y2="78.6"/>
                                    <polygon class="st0" points="96.6,80 89.8,81.9 89.8,77.9"/>
                                </g>
                                <line id="ground_1_2_" class="st0" x1="127.1" y1="136.8" x2="5.1" y2="136.8"/>
                                <line id="ground_zero_2_" class="st0 hidden-lg hidden-md hidden-sm" x1="278.3" y1="169.1" x2="113.5" y2="169.1"/>
                                <g id="tree">
                                    <path class="st0" d="M36.4,100.1c0,13-6.5,17.3-14.5,17.3s-14.5-4.3-14.5-17.3s6.5-29.9,14.5-29.9S36.4,87.1,36.4,100.1z"/>
                                    <line class="st0" x1="21.9" y1="86.5" x2="21.9" y2="148.4"/>
                                    <line class="st0" x1="21.9" y1="109.4" x2="30.2" y2="101.1"/>
                                    <line class="st0" x1="21.9" y1="95.6" x2="16.9" y2="90.6"/>
                                    <line class="st0" x1="26.9" y1="146.3" x2="21.9" y2="141.3"/>
                                    <line class="st0" x1="16.9" y1="146.3" x2="21.9" y2="141.3"/>
                                </g>

                </svg>


                <svg id="computer" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="280px" height="175.3px" viewBox="0 0 280 175.3" style="enable-background:new 0 0 280 175.3;"
                     xml:space="preserve"  class="wwd-icons">
<style type="text/css">
    /*.st0{fill:none;stroke:#0013FF;stroke-miterlimit:10;}*/
    .st1{clip-path:url(#SVGID_2_);}
    .st2{fill:none;}
    .st3{clip-path:url(#SVGID_4_);}
</style>

                    <g id="macbook_1_">
                        <path class="st0" d="M245,169.9H87.1c-1.5,0-2.8-1.2-2.8-2.8V77.5c0-1.5,1.2-2.8,2.8-2.8H245c1.5,0,2.8,1.2,2.8,2.8v89.7
			C247.8,168.7,246.6,169.9,245,169.9z"/>
                        <line class="st0" x1="84.4" y1="163.9" x2="247.8" y2="163.9"/>
                        <rect x="147.7" y="163.9" class="st0" width="36.7" height="2.2"/>
                        <circle class="st0" cx="166.1" cy="78.8" r="1.3"/>
                    </g>
                    <line id="desk_1_" class="st0 hidden-lg hidden-md hidden-sm" x1="4.6" y1="170.1" x2="277" y2="170.1" />
                    <g id="bootstrap_1_">
                        <path class="st0" d="M168.1,98c1.4,0,2.6,0.2,3.8,0.5c1.2,0.4,2.2,0.9,3.1,1.6c0.9,0.7,1.6,1.6,2.1,2.7c0.5,1.1,0.8,2.3,0.8,3.8
			c0,1-0.2,2.1-0.6,3.1c-0.4,0.9-0.9,1.8-1.5,2.5s-1.4,1.3-2.3,1.7c-0.9,0.4-1.9,0.7-3,0.8l0,0c1.1,0,2.2,0.3,3.2,0.7
			c1,0.4,1.9,1,2.7,1.7c0.8,0.7,1.4,1.6,1.8,2.7s0.7,2.2,0.7,3.6c0,1.6-0.3,2.9-0.9,4.1c-0.6,1.2-1.4,2.2-2.4,3
			c-1,0.8-2.2,1.4-3.6,1.8c-1.4,0.4-3,0.6-4.6,0.6h-14.4V98H168.1z M170.6,114.7h-17.4"/>
                    </g>
                    <g id="plant">
                        <g id="flowerpot">
                            <polygon class="st0" points="55.6,170.1 35,170.1 31.7,145.8 59,145.8 			"/>
                            <rect x="31.7" y="136" class="st0" width="27.4" height="9.7"/>
                        </g>
                        <g id="flower">
                            <defs>
                                <rect id="SVGID_1_" x="31.7" y="23.2" width="27.4" height="112.8"/>
                            </defs>
                            <clipPath id="SVGID_2_">
                                <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                            </clipPath>
                            <g class="st1">
                                <g id="floversprout">
                                    <line class="st0" x1="45.3" y1="175.3" x2="45.3" y2="107.4"/>
                                    <line class="st0" x1="45.3" y1="131.5" x2="54" y2="115"/>
                                    <line class="st0" x1="38.4" y1="109.9" x2="45.3" y2="119.9"/>
                                </g>
                            </g>
                        </g>
                    </g>
                    <rect id="ZeroRectangle_2_" class="st1" width="280" height="170"/>
</svg>




                <svg id="FinTech" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="280px" height="170px" viewBox="0 0 280 170" style="enable-background:new 0 0 280 170;"
                     xml:space="preserve" class="wwd-icons">


                        <rect id="ZeroRectangle_1_" class="st1" width="280" height="170"/>
                        <polyline class="st0" points="273.5,163.1 202.6,163.1 202.6,169.2 	"/>
                        <polyline class="st0" points="273.5,157 211.8,157 211.8,163.1 	"/>
                        <path class="st0" d="M261.5,47.1c5.1,0,9.2-4.1,9.2-9.2s-4.1-9.2-9.2-9.2h-26.8c-5.1,0-9.2,4.1-9.2,9.2s4.1,9.2,9.2,9.2"/>
                        <line class="st0" x1="248.1" y1="37.5" x2="248.1" y2="134.7"/>
                        <line class="st0" x1="241.4" y1="40.9" x2="241.4" y2="134.7"/>
                        <line class="st0" x1="254.8" y1="40.9" x2="254.8" y2="134.7"/>
                        <line class="st0" x1="261.1" y1="141.7" x2="235.1" y2="141.7"/>
                        <line class="st0" x1="264.4" y1="150.6" x2="231.7" y2="150.6"/>
                        <line class="st0 hidden-lg hidden-md hidden-sm" x1="18" y1="169.2" x2="273.5" y2="169.2"/>
                        <path class="st0" d="M80.8,73.3c0,12.4-10.1,22.5-22.5,22.5S35.9,85.7,35.9,73.3"/>
                        <line class="st0" x1="58.4" y1="63" x2="58.4" y2="157.5"/>
                        <circle id="light03" class="st0" cx="80.8" cy="73.3" r="6"/>
                        <circle id="light02" class="st0" cx="35.9" cy="73.3" r="6"/>
                        <circle id="light01" class="st0" cx="58.4" cy="63" r="6"/>
                        <line class="st0" x1="47.8" y1="162.6" x2="68.9" y2="162.6"/>

                </svg>

            </div>
        </section>

        <section id="project_interesting" class="container-fluid inverse">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-lg-push-6 col-md-push-6">
                    <header>
                        <h2>Project Areas We Are Interested In</h2>
                    </header>
                    <?php  if ( is_active_sidebar( 'home-sidebar-04' )  ) : dynamic_sidebar( 'home-sidebar-04' ); endif; ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-lg-pull-6 col-md-pull-6">

                    <svg id="projectCity" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="457.8px" height="463.3px" viewBox="0 0 457.8 463.3" style="enable-background:new 0 0 457.8 463.3;"
                         xml:space="preserve">

                        <line class="st0" x1="103.8" y1="238.2" x2="1.2" y2="238.2"/>
                        <line class="st0" x1="103.8" y1="235.8" x2="1.2" y2="235.8"/>
                        <line class="st0" x1="5.6" y1="238.2" x2="5.6" y2="454.3"/>
                        <polyline class="st0" points="99.2,232.8 92,210.8 12.9,210.8 5.8,232.8 "/>
                        <line class="st0" x1="99.8" y1="449.4" x2="99.8" y2="238.2"/>
                        <g>
                            <g>

                                <rect x="80.8" y="249.6" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 173.3534 514.037)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="264" x2="86.7" y2="249.9"/>
                                <line class="st0" x1="94.7" y1="264.4" x2="78.7" y2="264.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="249.6" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 129.2938 514.037)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="264" x2="64.6" y2="249.9"/>
                                <line class="st0" x1="72.7" y1="264.4" x2="56.6" y2="264.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="249.6" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 85.2342 514.037)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="264" x2="42.6" y2="249.9"/>
                                <line class="st0" x1="50.6" y1="264.4" x2="34.6" y2="264.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="249.6" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 41.1745 514.037)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="264" x2="20.6" y2="249.9"/>
                                <line class="st0" x1="28.6" y1="264.4" x2="12.6" y2="264.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="80.8" y="273.8" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 173.3534 562.4157)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="288.2" x2="86.7" y2="274.1"/>
                                <line class="st0" x1="94.7" y1="288.6" x2="78.7" y2="288.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="273.8" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 129.2938 562.4157)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="288.2" x2="64.6" y2="274.1"/>
                                <line class="st0" x1="72.7" y1="288.6" x2="56.6" y2="288.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="273.8" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 85.2342 562.4157)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="288.2" x2="42.6" y2="274.1"/>
                                <line class="st0" x1="50.6" y1="288.6" x2="34.6" y2="288.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="273.8" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 41.1745 562.4157)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="288.2" x2="20.6" y2="274.1"/>
                                <line class="st0" x1="28.6" y1="288.6" x2="12.6" y2="288.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="80.8" y="298" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 173.3534 610.7944)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="312.4" x2="86.7" y2="298.2"/>
                                <line class="st0" x1="94.7" y1="312.8" x2="78.7" y2="312.8"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="298" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 129.2938 610.7944)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="312.4" x2="64.6" y2="298.2"/>
                                <line class="st0" x1="72.7" y1="312.8" x2="56.6" y2="312.8"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="298" transform="matrix(-1 -4.421542e-11 4.421542e-11 -1 85.2342 610.7944)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="312.4" x2="42.6" y2="298.2"/>
                                <line class="st0" x1="50.6" y1="312.8" x2="34.6" y2="312.8"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="298" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 41.1745 610.7944)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="312.4" x2="20.6" y2="298.2"/>
                                <line class="st0" x1="28.6" y1="312.8" x2="12.6" y2="312.8"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="80.8" y="322.2" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 173.3534 659.1731)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="336.6" x2="86.7" y2="322.4"/>
                                <line class="st0" x1="94.7" y1="337" x2="78.7" y2="337"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="322.2" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 129.2938 659.1731)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="336.6" x2="64.6" y2="322.4"/>
                                <line class="st0" x1="72.7" y1="337" x2="56.6" y2="337"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="322.2" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 85.2342 659.1731)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="336.6" x2="42.6" y2="322.4"/>
                                <line class="st0" x1="50.6" y1="337" x2="34.6" y2="337"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="322.2" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 41.1745 659.1731)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="336.6" x2="20.6" y2="322.4"/>
                                <line class="st0" x1="28.6" y1="337" x2="12.6" y2="337"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="80.8" y="346.4" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 173.3534 707.5518)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="360.8" x2="86.7" y2="346.6"/>
                                <line class="st0" x1="94.7" y1="361.2" x2="78.7" y2="361.2"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="346.4" transform="matrix(-1 -4.421542e-11 4.421542e-11 -1 129.2938 707.5518)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="360.8" x2="64.6" y2="346.6"/>
                                <line class="st0" x1="72.7" y1="361.2" x2="56.6" y2="361.2"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="346.4" transform="matrix(-1 -4.406088e-11 4.406088e-11 -1 85.2342 707.5518)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="360.8" x2="42.6" y2="346.6"/>
                                <line class="st0" x1="50.6" y1="361.2" x2="34.6" y2="361.2"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="346.4" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 41.1745 707.5518)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="360.8" x2="20.6" y2="346.6"/>
                                <line class="st0" x1="28.6" y1="361.2" x2="12.6" y2="361.2"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="80.8" y="370.6" transform="matrix(-1 -4.421542e-11 4.421542e-11 -1 173.3534 755.9305)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="385" x2="86.7" y2="370.8"/>
                                <line class="st0" x1="94.7" y1="385.4" x2="78.7" y2="385.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="370.6" transform="matrix(-1 -4.328816e-11 4.328816e-11 -1 129.2938 755.9305)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="385" x2="64.6" y2="370.8"/>
                                <line class="st0" x1="72.7" y1="385.4" x2="56.6" y2="385.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="370.6" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 85.2342 755.9305)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="385" x2="42.6" y2="370.8"/>
                                <line class="st0" x1="50.6" y1="385.4" x2="34.6" y2="385.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="370.6" transform="matrix(-1 -4.607082e-11 4.607082e-11 -1 41.1745 755.9305)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="385" x2="20.6" y2="370.8"/>
                                <line class="st0" x1="28.6" y1="385.4" x2="12.6" y2="385.4"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="80.8" y="394.7" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 173.3534 804.3091)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="86.7" y1="409.2" x2="86.7" y2="395"/>
                                <line class="st0" x1="94.7" y1="409.6" x2="78.7" y2="409.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="58.8" y="394.7" transform="matrix(-1 -4.344270e-11 4.344270e-11 -1 129.2938 804.3091)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="64.6" y1="409.2" x2="64.6" y2="395"/>
                                <line class="st0" x1="72.7" y1="409.6" x2="56.6" y2="409.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="36.7" y="394.7" transform="matrix(-1 -4.498858e-11 4.498858e-11 -1 85.2342 804.3091)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="42.6" y1="409.2" x2="42.6" y2="395"/>
                                <line class="st0" x1="50.6" y1="409.6" x2="34.6" y2="409.6"/>
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="14.7" y="394.7" transform="matrix(-1 -4.514312e-11 4.514312e-11 -1 41.1745 804.3091)" class="st0" width="11.8" height="14.8"/>
                                <line class="st0" x1="20.6" y1="409.2" x2="20.6" y2="395"/>
                                <line class="st0" x1="28.6" y1="409.6" x2="12.6" y2="409.6"/>
                            </g>
                        </g>
                        <g>

                            <rect x="58.8" y="430.1" transform="matrix(-1 -4.473545e-11 4.473545e-11 -1 151.3176 874.9824)" class="st0" width="33.8" height="14.8"/>
                            <line class="st0" x1="94.7" y1="444.9" x2="82.9" y2="444.9"/>
                        </g>
                        <g>
                            <rect x="14.7" y="430.1" class="st0" width="33.8" height="14.8"/>
                            <line class="st0" x1="12.6" y1="444.9" x2="24.3" y2="444.9"/>
                        </g>
                        <polyline class="st0" points="0,454.3 104.1,454.3 104.1,449.4 72.9,449.4 "/>
                        <line class="st0" x1="103.9" y1="422.4" x2="72.8" y2="422.4"/>
                        <g>
                            <line class="st0" x1="103.1" y1="235.8" x2="103.1" y2="231.7"/>
                            <line class="st0" x1="93" y1="235.8" x2="93" y2="231.7"/>
                            <line class="st0" x1="82.9" y1="235.8" x2="82.9" y2="231.7"/>
                            <line class="st0" x1="72.7" y1="235.8" x2="72.7" y2="231.7"/>
                            <line class="st0" x1="62.6" y1="235.8" x2="62.6" y2="231.7"/>
                            <line class="st0" x1="52.5" y1="235.8" x2="52.5" y2="231.7"/>
                            <line class="st0" x1="42.4" y1="235.8" x2="42.4" y2="231.7"/>
                            <line class="st0" x1="32.2" y1="235.8" x2="32.2" y2="231.7"/>
                            <line class="st0" x1="22.1" y1="235.8" x2="22.1" y2="231.7"/>
                            <line class="st0" x1="12" y1="235.8" x2="12" y2="231.7"/>
                            <line class="st0" x1="1.8" y1="235.8" x2="1.8" y2="231.7"/>
                        </g>
                        <g>
                            <line class="st0" x1="75.2" y1="440.2" x2="69" y2="434"/>
                            <line class="st0" x1="71.4" y1="438.9" x2="67.7" y2="435.2"/>
                            <line class="st0" x1="76.7" y1="438.9" x2="73" y2="435.2"/>
                        </g>
                        <g>
                            <line class="st0" x1="41.1" y1="440.2" x2="34.9" y2="434"/>
                            <line class="st0" x1="37.2" y1="438.9" x2="33.5" y2="435.2"/>
                            <line class="st0" x1="42.6" y1="438.9" x2="38.9" y2="435.2"/>
                        </g>
                        <line class="st0" x1="5.6" y1="454.3" x2="457.8" y2="454.3"/>
                        <g>
                            <line class="st0" x1="320.4" y1="184.5" x2="323.6" y2="358.3"/>
                            <line class="st0" x1="312" y1="358.3" x2="315.2" y2="184.5"/>
                            <g id="wing2">
                                <g>
                                    <g>
                                        <polyline class="st0" points="328.2,174.9 420.3,228.1 418.6,230 336.2,190.6 				"/>
                                    </g>
                                    <g>
                                        <polyline class="st0" points="312.2,183.2 220.1,236.4 219.3,234 294.6,182.3 				"/>
                                    </g>
                                    <g>
                                        <polyline class="st0" points="313,165.2 313,58.9 315.5,59.3 322.6,150.4 				"/>
                                    </g>
                                </g>
                                <circle class="st0" cx="317.8" cy="174.4" r="10.4"/>
                                <circle class="st2" cx="317.8" cy="174.4" r="115.9"/>
                            </g>
                        </g>
                        <rect x="144.5" y="358.3" class="st0" width="232.7" height="21.2"/>
                        <rect x="144.5" y="383.2" class="st0" width="232.7" height="71"/>
                        <rect x="141.4" y="379.5" class="st0" width="238.9" height="3.7"/>
                        <g>
                            <path class="st0" d="M411.6,439.7c0,6.6-3.3,8.8-7.3,8.8c-4.1,0-7.3-2.2-7.3-8.8s3.3-15.1,7.3-15.1
		C408.3,424.6,411.6,433.1,411.6,439.7z"/>
                            <line class="st0" x1="404.3" y1="432.9" x2="404.3" y2="461.3"/>
                            <line class="st0" x1="404.3" y1="442.7" x2="408.5" y2="438.5"/>
                            <line class="st0" x1="406.8" y1="463.1" x2="404.3" y2="460.6"/>
                            <line class="st0" x1="401.7" y1="463.1" x2="404.3" y2="460.6"/>
                        </g>
                        <g>
                            <g>
                                <rect x="158.3" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="158.3" y1="437.5" x2="166.9" y2="437.5"/>
                                    <line class="st0" x1="158.3" y1="430.3" x2="166.9" y2="430.3"/>
                                    <line class="st0" x1="158.3" y1="423.2" x2="166.9" y2="423.2"/>
                                    <line class="st0" x1="158.3" y1="416.1" x2="166.9" y2="416.1"/>
                                    <line class="st0" x1="158.3" y1="408.9" x2="166.9" y2="408.9"/>
                                    <line class="st0" x1="158.3" y1="401.8" x2="166.9" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="166.9" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="166.9" y1="437.5" x2="175.4" y2="437.5"/>
                                    <line class="st0" x1="166.9" y1="430.3" x2="175.4" y2="430.3"/>
                                    <line class="st0" x1="166.9" y1="423.2" x2="175.4" y2="423.2"/>
                                    <line class="st0" x1="166.9" y1="416.1" x2="175.4" y2="416.1"/>
                                    <line class="st0" x1="166.9" y1="408.9" x2="175.4" y2="408.9"/>
                                    <line class="st0" x1="166.9" y1="401.8" x2="175.4" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="175.4" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="175.4" y1="437.5" x2="183.9" y2="437.5"/>
                                    <line class="st0" x1="175.4" y1="430.3" x2="183.9" y2="430.3"/>
                                    <line class="st0" x1="175.4" y1="423.2" x2="183.9" y2="423.2"/>
                                    <line class="st0" x1="175.4" y1="416.1" x2="183.9" y2="416.1"/>
                                    <line class="st0" x1="175.4" y1="408.9" x2="183.9" y2="408.9"/>
                                    <line class="st0" x1="175.4" y1="401.8" x2="183.9" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="183.9" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="183.9" y1="437.5" x2="192.4" y2="437.5"/>
                                    <line class="st0" x1="183.9" y1="430.3" x2="192.4" y2="430.3"/>
                                    <line class="st0" x1="183.9" y1="423.2" x2="192.4" y2="423.2"/>
                                    <line class="st0" x1="183.9" y1="416.1" x2="192.4" y2="416.1"/>
                                    <line class="st0" x1="183.9" y1="408.9" x2="192.4" y2="408.9"/>
                                    <line class="st0" x1="183.9" y1="401.8" x2="192.4" y2="401.8"/>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="205.9" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="205.9" y1="437.5" x2="214.4" y2="437.5"/>
                                    <line class="st0" x1="205.9" y1="430.3" x2="214.4" y2="430.3"/>
                                    <line class="st0" x1="205.9" y1="423.2" x2="214.4" y2="423.2"/>
                                    <line class="st0" x1="205.9" y1="416.1" x2="214.4" y2="416.1"/>
                                    <line class="st0" x1="205.9" y1="408.9" x2="214.4" y2="408.9"/>
                                    <line class="st0" x1="205.9" y1="401.8" x2="214.4" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="214.4" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="214.4" y1="437.5" x2="223" y2="437.5"/>
                                    <line class="st0" x1="214.4" y1="430.3" x2="223" y2="430.3"/>
                                    <line class="st0" x1="214.4" y1="423.2" x2="223" y2="423.2"/>
                                    <line class="st0" x1="214.4" y1="416.1" x2="223" y2="416.1"/>
                                    <line class="st0" x1="214.4" y1="408.9" x2="223" y2="408.9"/>
                                    <line class="st0" x1="214.4" y1="401.8" x2="223" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="223" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="223" y1="437.5" x2="231.5" y2="437.5"/>
                                    <line class="st0" x1="223" y1="430.3" x2="231.5" y2="430.3"/>
                                    <line class="st0" x1="223" y1="423.2" x2="231.5" y2="423.2"/>
                                    <line class="st0" x1="223" y1="416.1" x2="231.5" y2="416.1"/>
                                    <line class="st0" x1="223" y1="408.9" x2="231.5" y2="408.9"/>
                                    <line class="st0" x1="223" y1="401.8" x2="231.5" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="231.5" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="231.5" y1="437.5" x2="240" y2="437.5"/>
                                    <line class="st0" x1="231.5" y1="430.3" x2="240" y2="430.3"/>
                                    <line class="st0" x1="231.5" y1="423.2" x2="240" y2="423.2"/>
                                    <line class="st0" x1="231.5" y1="416.1" x2="240" y2="416.1"/>
                                    <line class="st0" x1="231.5" y1="408.9" x2="240" y2="408.9"/>
                                    <line class="st0" x1="231.5" y1="401.8" x2="240" y2="401.8"/>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="253.5" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="253.5" y1="437.5" x2="262" y2="437.5"/>
                                    <line class="st0" x1="253.5" y1="430.3" x2="262" y2="430.3"/>
                                    <line class="st0" x1="253.5" y1="423.2" x2="262" y2="423.2"/>
                                    <line class="st0" x1="253.5" y1="416.1" x2="262" y2="416.1"/>
                                    <line class="st0" x1="253.5" y1="408.9" x2="262" y2="408.9"/>
                                    <line class="st0" x1="253.5" y1="401.8" x2="262" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="262" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="262" y1="437.5" x2="270.6" y2="437.5"/>
                                    <line class="st0" x1="262" y1="430.3" x2="270.6" y2="430.3"/>
                                    <line class="st0" x1="262" y1="423.2" x2="270.6" y2="423.2"/>
                                    <line class="st0" x1="262" y1="416.1" x2="270.6" y2="416.1"/>
                                    <line class="st0" x1="262" y1="408.9" x2="270.6" y2="408.9"/>
                                    <line class="st0" x1="262" y1="401.8" x2="270.6" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="270.6" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="270.6" y1="437.5" x2="279.1" y2="437.5"/>
                                    <line class="st0" x1="270.6" y1="430.3" x2="279.1" y2="430.3"/>
                                    <line class="st0" x1="270.6" y1="423.2" x2="279.1" y2="423.2"/>
                                    <line class="st0" x1="270.6" y1="416.1" x2="279.1" y2="416.1"/>
                                    <line class="st0" x1="270.6" y1="408.9" x2="279.1" y2="408.9"/>
                                    <line class="st0" x1="270.6" y1="401.8" x2="279.1" y2="401.8"/>
                                </g>
                            </g>
                            <g>
                                <rect x="279.1" y="394.3" class="st0" width="8.5" height="50.6"/>
                                <g>
                                    <line class="st0" x1="279.1" y1="437.5" x2="287.6" y2="437.5"/>
                                    <line class="st0" x1="279.1" y1="430.3" x2="287.6" y2="430.3"/>
                                    <line class="st0" x1="279.1" y1="423.2" x2="287.6" y2="423.2"/>
                                    <line class="st0" x1="279.1" y1="416.1" x2="287.6" y2="416.1"/>
                                    <line class="st0" x1="279.1" y1="408.9" x2="287.6" y2="408.9"/>
                                    <line class="st0" x1="279.1" y1="401.8" x2="287.6" y2="401.8"/>
                                </g>
                            </g>
                        </g>
                        <rect x="331.8" y="422.4" class="st0" width="20.7" height="31.8"/>
                        <rect x="311.1" y="422.4" class="st0" width="20.7" height="31.8"/>
                        <line class="st0" x1="357.4" y1="422.4" x2="306.3" y2="422.4"/>
                        <g>
                            <polyline class="st0" points="64.6,206.9 64.6,46 158.3,46 158.3,353.9 	"/>
                            <g>
                                <rect x="74.3" y="57.3" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="57.3" x2="143.6" y2="60.8"/>
                                <line class="st0" x1="79.7" y1="60.8" x2="79.7" y2="57.3"/>
                                <line class="st0" x1="85.1" y1="60.8" x2="85.1" y2="57.3"/>
                                <line class="st0" x1="90.4" y1="60.8" x2="90.4" y2="57.3"/>
                                <line class="st0" x1="95.7" y1="60.8" x2="95.7" y2="57.3"/>
                                <line class="st0" x1="101" y1="60.8" x2="101" y2="57.3"/>
                                <line class="st0" x1="106.4" y1="60.8" x2="106.4" y2="57.3"/>
                                <line class="st0" x1="111.7" y1="60.8" x2="111.7" y2="57.3"/>
                                <line class="st0" x1="117" y1="60.8" x2="117" y2="57.3"/>
                                <line class="st0" x1="122.3" y1="60.8" x2="122.3" y2="57.3"/>
                                <line class="st0" x1="127.6" y1="60.8" x2="127.6" y2="57.3"/>
                                <line class="st0" x1="133" y1="60.8" x2="133" y2="57.3"/>
                                <line class="st0" x1="138.3" y1="60.8" x2="138.3" y2="57.3"/>
                            </g>
                            <g>
                                <rect x="74.3" y="65" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="65" x2="143.6" y2="68.5"/>
                                <line class="st0" x1="79.7" y1="68.5" x2="79.7" y2="65"/>
                                <line class="st0" x1="85.1" y1="68.5" x2="85.1" y2="65"/>
                                <line class="st0" x1="90.4" y1="68.5" x2="90.4" y2="65"/>
                                <line class="st0" x1="95.7" y1="68.5" x2="95.7" y2="65"/>
                                <line class="st0" x1="101" y1="68.5" x2="101" y2="65"/>
                                <line class="st0" x1="106.4" y1="68.5" x2="106.4" y2="65"/>
                                <line class="st0" x1="111.7" y1="68.5" x2="111.7" y2="65"/>
                                <line class="st0" x1="117" y1="68.5" x2="117" y2="65"/>
                                <line class="st0" x1="122.3" y1="68.5" x2="122.3" y2="65"/>
                                <line class="st0" x1="127.6" y1="68.5" x2="127.6" y2="65"/>
                                <line class="st0" x1="133" y1="68.5" x2="133" y2="65"/>
                                <line class="st0" x1="138.3" y1="68.5" x2="138.3" y2="65"/>
                            </g>
                            <g>
                                <rect x="74.3" y="72.7" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="72.7" x2="143.6" y2="76.2"/>
                                <line class="st0" x1="79.7" y1="76.2" x2="79.7" y2="72.7"/>
                                <line class="st0" x1="85.1" y1="76.2" x2="85.1" y2="72.7"/>
                                <line class="st0" x1="90.4" y1="76.2" x2="90.4" y2="72.7"/>
                                <line class="st0" x1="95.7" y1="76.2" x2="95.7" y2="72.7"/>
                                <line class="st0" x1="101" y1="76.2" x2="101" y2="72.7"/>
                                <line class="st0" x1="106.4" y1="76.2" x2="106.4" y2="72.7"/>
                                <line class="st0" x1="111.7" y1="76.2" x2="111.7" y2="72.7"/>
                                <line class="st0" x1="117" y1="76.2" x2="117" y2="72.7"/>
                                <line class="st0" x1="122.3" y1="76.2" x2="122.3" y2="72.7"/>
                                <line class="st0" x1="127.6" y1="76.2" x2="127.6" y2="72.7"/>
                                <line class="st0" x1="133" y1="76.2" x2="133" y2="72.7"/>
                                <line class="st0" x1="138.3" y1="76.2" x2="138.3" y2="72.7"/>
                            </g>
                            <g>
                                <rect x="74.3" y="80.4" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="80.4" x2="143.6" y2="83.9"/>
                                <line class="st0" x1="79.7" y1="83.9" x2="79.7" y2="80.4"/>
                                <line class="st0" x1="85.1" y1="83.9" x2="85.1" y2="80.4"/>
                                <line class="st0" x1="90.4" y1="83.9" x2="90.4" y2="80.4"/>
                                <line class="st0" x1="95.7" y1="83.9" x2="95.7" y2="80.4"/>
                                <line class="st0" x1="101" y1="83.9" x2="101" y2="80.4"/>
                                <line class="st0" x1="106.4" y1="83.9" x2="106.4" y2="80.4"/>
                                <line class="st0" x1="111.7" y1="83.9" x2="111.7" y2="80.4"/>
                                <line class="st0" x1="117" y1="83.9" x2="117" y2="80.4"/>
                                <line class="st0" x1="122.3" y1="83.9" x2="122.3" y2="80.4"/>
                                <line class="st0" x1="127.6" y1="83.9" x2="127.6" y2="80.4"/>
                                <line class="st0" x1="133" y1="83.9" x2="133" y2="80.4"/>
                                <line class="st0" x1="138.3" y1="83.9" x2="138.3" y2="80.4"/>
                            </g>
                            <g>
                                <rect x="74.3" y="88.1" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="88.1" x2="143.6" y2="91.6"/>
                                <line class="st0" x1="79.7" y1="91.6" x2="79.7" y2="88.1"/>
                                <line class="st0" x1="85.1" y1="91.6" x2="85.1" y2="88.1"/>
                                <line class="st0" x1="90.4" y1="91.6" x2="90.4" y2="88.1"/>
                                <line class="st0" x1="95.7" y1="91.6" x2="95.7" y2="88.1"/>
                                <line class="st0" x1="101" y1="91.6" x2="101" y2="88.1"/>
                                <line class="st0" x1="106.4" y1="91.6" x2="106.4" y2="88.1"/>
                                <line class="st0" x1="111.7" y1="91.6" x2="111.7" y2="88.1"/>
                                <line class="st0" x1="117" y1="91.6" x2="117" y2="88.1"/>
                                <line class="st0" x1="122.3" y1="91.6" x2="122.3" y2="88.1"/>
                                <line class="st0" x1="127.6" y1="91.6" x2="127.6" y2="88.1"/>
                                <line class="st0" x1="133" y1="91.6" x2="133" y2="88.1"/>
                                <line class="st0" x1="138.3" y1="91.6" x2="138.3" y2="88.1"/>
                            </g>
                            <g>
                                <rect x="74.3" y="95.8" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="95.8" x2="143.6" y2="99.4"/>
                                <line class="st0" x1="79.7" y1="99.4" x2="79.7" y2="95.8"/>
                                <line class="st0" x1="85.1" y1="99.4" x2="85.1" y2="95.8"/>
                                <line class="st0" x1="90.4" y1="99.4" x2="90.4" y2="95.8"/>
                                <line class="st0" x1="95.7" y1="99.4" x2="95.7" y2="95.8"/>
                                <line class="st0" x1="101" y1="99.4" x2="101" y2="95.8"/>
                                <line class="st0" x1="106.4" y1="99.4" x2="106.4" y2="95.8"/>
                                <line class="st0" x1="111.7" y1="99.4" x2="111.7" y2="95.8"/>
                                <line class="st0" x1="117" y1="99.4" x2="117" y2="95.8"/>
                                <line class="st0" x1="122.3" y1="99.4" x2="122.3" y2="95.8"/>
                                <line class="st0" x1="127.6" y1="99.4" x2="127.6" y2="95.8"/>
                                <line class="st0" x1="133" y1="99.4" x2="133" y2="95.8"/>
                                <line class="st0" x1="138.3" y1="99.4" x2="138.3" y2="95.8"/>
                            </g>
                            <g>
                                <rect x="74.3" y="103.5" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="103.5" x2="143.6" y2="107.1"/>
                                <line class="st0" x1="79.7" y1="107.1" x2="79.7" y2="103.5"/>
                                <line class="st0" x1="85.1" y1="107.1" x2="85.1" y2="103.5"/>
                                <line class="st0" x1="90.4" y1="107.1" x2="90.4" y2="103.5"/>
                                <line class="st0" x1="95.7" y1="107.1" x2="95.7" y2="103.5"/>
                                <line class="st0" x1="101" y1="107.1" x2="101" y2="103.5"/>
                                <line class="st0" x1="106.4" y1="107.1" x2="106.4" y2="103.5"/>
                                <line class="st0" x1="111.7" y1="107.1" x2="111.7" y2="103.5"/>
                                <line class="st0" x1="117" y1="107.1" x2="117" y2="103.5"/>
                                <line class="st0" x1="122.3" y1="107.1" x2="122.3" y2="103.5"/>
                                <line class="st0" x1="127.6" y1="107.1" x2="127.6" y2="103.5"/>
                                <line class="st0" x1="133" y1="107.1" x2="133" y2="103.5"/>
                                <line class="st0" x1="138.3" y1="107.1" x2="138.3" y2="103.5"/>
                            </g>
                            <g>
                                <rect x="74.3" y="111.3" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="111.3" x2="143.6" y2="114.8"/>
                                <line class="st0" x1="79.7" y1="114.8" x2="79.7" y2="111.3"/>
                                <line class="st0" x1="85.1" y1="114.8" x2="85.1" y2="111.3"/>
                                <line class="st0" x1="90.4" y1="114.8" x2="90.4" y2="111.3"/>
                                <line class="st0" x1="95.7" y1="114.8" x2="95.7" y2="111.3"/>
                                <line class="st0" x1="101" y1="114.8" x2="101" y2="111.3"/>
                                <line class="st0" x1="106.4" y1="114.8" x2="106.4" y2="111.3"/>
                                <line class="st0" x1="111.7" y1="114.8" x2="111.7" y2="111.3"/>
                                <line class="st0" x1="117" y1="114.8" x2="117" y2="111.3"/>
                                <line class="st0" x1="122.3" y1="114.8" x2="122.3" y2="111.3"/>
                                <line class="st0" x1="127.6" y1="114.8" x2="127.6" y2="111.3"/>
                                <line class="st0" x1="133" y1="114.8" x2="133" y2="111.3"/>
                                <line class="st0" x1="138.3" y1="114.8" x2="138.3" y2="111.3"/>
                            </g>
                            <g>
                                <rect x="74.3" y="119" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="119" x2="143.6" y2="122.5"/>
                                <line class="st0" x1="79.7" y1="122.5" x2="79.7" y2="119"/>
                                <line class="st0" x1="85.1" y1="122.5" x2="85.1" y2="119"/>
                                <line class="st0" x1="90.4" y1="122.5" x2="90.4" y2="119"/>
                                <line class="st0" x1="95.7" y1="122.5" x2="95.7" y2="119"/>
                                <line class="st0" x1="101" y1="122.5" x2="101" y2="119"/>
                                <line class="st0" x1="106.4" y1="122.5" x2="106.4" y2="119"/>
                                <line class="st0" x1="111.7" y1="122.5" x2="111.7" y2="119"/>
                                <line class="st0" x1="117" y1="122.5" x2="117" y2="119"/>
                                <line class="st0" x1="122.3" y1="122.5" x2="122.3" y2="119"/>
                                <line class="st0" x1="127.6" y1="122.5" x2="127.6" y2="119"/>
                                <line class="st0" x1="133" y1="122.5" x2="133" y2="119"/>
                                <line class="st0" x1="138.3" y1="122.5" x2="138.3" y2="119"/>
                            </g>
                            <g>
                                <rect x="74.3" y="126.7" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="126.7" x2="143.6" y2="130.2"/>
                                <line class="st0" x1="79.7" y1="130.2" x2="79.7" y2="126.7"/>
                                <line class="st0" x1="85.1" y1="130.2" x2="85.1" y2="126.7"/>
                                <line class="st0" x1="90.4" y1="130.2" x2="90.4" y2="126.7"/>
                                <line class="st0" x1="95.7" y1="130.2" x2="95.7" y2="126.7"/>
                                <line class="st0" x1="101" y1="130.2" x2="101" y2="126.7"/>
                                <line class="st0" x1="106.4" y1="130.2" x2="106.4" y2="126.7"/>
                                <line class="st0" x1="111.7" y1="130.2" x2="111.7" y2="126.7"/>
                                <line class="st0" x1="117" y1="130.2" x2="117" y2="126.7"/>
                                <line class="st0" x1="122.3" y1="130.2" x2="122.3" y2="126.7"/>
                                <line class="st0" x1="127.6" y1="130.2" x2="127.6" y2="126.7"/>
                                <line class="st0" x1="133" y1="130.2" x2="133" y2="126.7"/>
                                <line class="st0" x1="138.3" y1="130.2" x2="138.3" y2="126.7"/>
                            </g>
                            <g>
                                <rect x="74.3" y="134.4" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="134.4" x2="143.6" y2="137.9"/>
                                <line class="st0" x1="79.7" y1="137.9" x2="79.7" y2="134.4"/>
                                <line class="st0" x1="85.1" y1="137.9" x2="85.1" y2="134.4"/>
                                <line class="st0" x1="90.4" y1="137.9" x2="90.4" y2="134.4"/>
                                <line class="st0" x1="95.7" y1="137.9" x2="95.7" y2="134.4"/>
                                <line class="st0" x1="101" y1="137.9" x2="101" y2="134.4"/>
                                <line class="st0" x1="106.4" y1="137.9" x2="106.4" y2="134.4"/>
                                <line class="st0" x1="111.7" y1="137.9" x2="111.7" y2="134.4"/>
                                <line class="st0" x1="117" y1="137.9" x2="117" y2="134.4"/>
                                <line class="st0" x1="122.3" y1="137.9" x2="122.3" y2="134.4"/>
                                <line class="st0" x1="127.6" y1="137.9" x2="127.6" y2="134.4"/>
                                <line class="st0" x1="133" y1="137.9" x2="133" y2="134.4"/>
                                <line class="st0" x1="138.3" y1="137.9" x2="138.3" y2="134.4"/>
                            </g>
                            <g>
                                <rect x="74.3" y="142.1" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="142.1" x2="143.6" y2="145.6"/>
                                <line class="st0" x1="79.7" y1="145.6" x2="79.7" y2="142.1"/>
                                <line class="st0" x1="85.1" y1="145.6" x2="85.1" y2="142.1"/>
                                <line class="st0" x1="90.4" y1="145.6" x2="90.4" y2="142.1"/>
                                <line class="st0" x1="95.7" y1="145.6" x2="95.7" y2="142.1"/>
                                <line class="st0" x1="101" y1="145.6" x2="101" y2="142.1"/>
                                <line class="st0" x1="106.4" y1="145.6" x2="106.4" y2="142.1"/>
                                <line class="st0" x1="111.7" y1="145.6" x2="111.7" y2="142.1"/>
                                <line class="st0" x1="117" y1="145.6" x2="117" y2="142.1"/>
                                <line class="st0" x1="122.3" y1="145.6" x2="122.3" y2="142.1"/>
                                <line class="st0" x1="127.6" y1="145.6" x2="127.6" y2="142.1"/>
                                <line class="st0" x1="133" y1="145.6" x2="133" y2="142.1"/>
                                <line class="st0" x1="138.3" y1="145.6" x2="138.3" y2="142.1"/>
                            </g>
                            <g>
                                <rect x="74.3" y="149.8" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="149.8" x2="143.6" y2="153.3"/>
                                <line class="st0" x1="79.7" y1="153.3" x2="79.7" y2="149.8"/>
                                <line class="st0" x1="85.1" y1="153.3" x2="85.1" y2="149.8"/>
                                <line class="st0" x1="90.4" y1="153.3" x2="90.4" y2="149.8"/>
                                <line class="st0" x1="95.7" y1="153.3" x2="95.7" y2="149.8"/>
                                <line class="st0" x1="101" y1="153.3" x2="101" y2="149.8"/>
                                <line class="st0" x1="106.4" y1="153.3" x2="106.4" y2="149.8"/>
                                <line class="st0" x1="111.7" y1="153.3" x2="111.7" y2="149.8"/>
                                <line class="st0" x1="117" y1="153.3" x2="117" y2="149.8"/>
                                <line class="st0" x1="122.3" y1="153.3" x2="122.3" y2="149.8"/>
                                <line class="st0" x1="127.6" y1="153.3" x2="127.6" y2="149.8"/>
                                <line class="st0" x1="133" y1="153.3" x2="133" y2="149.8"/>
                                <line class="st0" x1="138.3" y1="153.3" x2="138.3" y2="149.8"/>
                            </g>
                            <g>
                                <rect x="74.3" y="157.5" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="157.5" x2="143.6" y2="161.1"/>
                                <line class="st0" x1="79.7" y1="161.1" x2="79.7" y2="157.5"/>
                                <line class="st0" x1="85.1" y1="161.1" x2="85.1" y2="157.5"/>
                                <line class="st0" x1="90.4" y1="161.1" x2="90.4" y2="157.5"/>
                                <line class="st0" x1="95.7" y1="161.1" x2="95.7" y2="157.5"/>
                                <line class="st0" x1="101" y1="161.1" x2="101" y2="157.5"/>
                                <line class="st0" x1="106.4" y1="161.1" x2="106.4" y2="157.5"/>
                                <line class="st0" x1="111.7" y1="161.1" x2="111.7" y2="157.5"/>
                                <line class="st0" x1="117" y1="161.1" x2="117" y2="157.5"/>
                                <line class="st0" x1="122.3" y1="161.1" x2="122.3" y2="157.5"/>
                                <line class="st0" x1="127.6" y1="161.1" x2="127.6" y2="157.5"/>
                                <line class="st0" x1="133" y1="161.1" x2="133" y2="157.5"/>
                                <line class="st0" x1="138.3" y1="161.1" x2="138.3" y2="157.5"/>
                            </g>
                            <g>
                                <rect x="74.3" y="165.2" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="165.2" x2="143.6" y2="168.8"/>
                                <line class="st0" x1="79.7" y1="168.8" x2="79.7" y2="165.2"/>
                                <line class="st0" x1="85.1" y1="168.8" x2="85.1" y2="165.2"/>
                                <line class="st0" x1="90.4" y1="168.8" x2="90.4" y2="165.2"/>
                                <line class="st0" x1="95.7" y1="168.8" x2="95.7" y2="165.2"/>
                                <line class="st0" x1="101" y1="168.8" x2="101" y2="165.2"/>
                                <line class="st0" x1="106.4" y1="168.8" x2="106.4" y2="165.2"/>
                                <line class="st0" x1="111.7" y1="168.8" x2="111.7" y2="165.2"/>
                                <line class="st0" x1="117" y1="168.8" x2="117" y2="165.2"/>
                                <line class="st0" x1="122.3" y1="168.8" x2="122.3" y2="165.2"/>
                                <line class="st0" x1="127.6" y1="168.8" x2="127.6" y2="165.2"/>
                                <line class="st0" x1="133" y1="168.8" x2="133" y2="165.2"/>
                                <line class="st0" x1="138.3" y1="168.8" x2="138.3" y2="165.2"/>
                            </g>
                            <g>
                                <rect x="74.3" y="173" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="173" x2="143.6" y2="176.5"/>
                                <line class="st0" x1="79.7" y1="176.5" x2="79.7" y2="173"/>
                                <line class="st0" x1="85.1" y1="176.5" x2="85.1" y2="173"/>
                                <line class="st0" x1="90.4" y1="176.5" x2="90.4" y2="173"/>
                                <line class="st0" x1="95.7" y1="176.5" x2="95.7" y2="173"/>
                                <line class="st0" x1="101" y1="176.5" x2="101" y2="173"/>
                                <line class="st0" x1="106.4" y1="176.5" x2="106.4" y2="173"/>
                                <line class="st0" x1="111.7" y1="176.5" x2="111.7" y2="173"/>
                                <line class="st0" x1="117" y1="176.5" x2="117" y2="173"/>
                                <line class="st0" x1="122.3" y1="176.5" x2="122.3" y2="173"/>
                                <line class="st0" x1="127.6" y1="176.5" x2="127.6" y2="173"/>
                                <line class="st0" x1="133" y1="176.5" x2="133" y2="173"/>
                                <line class="st0" x1="138.3" y1="176.5" x2="138.3" y2="173"/>
                            </g>
                            <g>
                                <rect x="74.3" y="180.7" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="180.7" x2="143.6" y2="184.2"/>
                                <line class="st0" x1="79.7" y1="184.2" x2="79.7" y2="180.7"/>
                                <line class="st0" x1="85.1" y1="184.2" x2="85.1" y2="180.7"/>
                                <line class="st0" x1="90.4" y1="184.2" x2="90.4" y2="180.7"/>
                                <line class="st0" x1="95.7" y1="184.2" x2="95.7" y2="180.7"/>
                                <line class="st0" x1="101" y1="184.2" x2="101" y2="180.7"/>
                                <line class="st0" x1="106.4" y1="184.2" x2="106.4" y2="180.7"/>
                                <line class="st0" x1="111.7" y1="184.2" x2="111.7" y2="180.7"/>
                                <line class="st0" x1="117" y1="184.2" x2="117" y2="180.7"/>
                                <line class="st0" x1="122.3" y1="184.2" x2="122.3" y2="180.7"/>
                                <line class="st0" x1="127.6" y1="184.2" x2="127.6" y2="180.7"/>
                                <line class="st0" x1="133" y1="184.2" x2="133" y2="180.7"/>
                                <line class="st0" x1="138.3" y1="184.2" x2="138.3" y2="180.7"/>
                            </g>
                            <g>
                                <rect x="74.3" y="188.4" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="188.4" x2="143.6" y2="191.9"/>
                                <line class="st0" x1="79.7" y1="191.9" x2="79.7" y2="188.4"/>
                                <line class="st0" x1="85.1" y1="191.9" x2="85.1" y2="188.4"/>
                                <line class="st0" x1="90.4" y1="191.9" x2="90.4" y2="188.4"/>
                                <line class="st0" x1="95.7" y1="191.9" x2="95.7" y2="188.4"/>
                                <line class="st0" x1="101" y1="191.9" x2="101" y2="188.4"/>
                                <line class="st0" x1="106.4" y1="191.9" x2="106.4" y2="188.4"/>
                                <line class="st0" x1="111.7" y1="191.9" x2="111.7" y2="188.4"/>
                                <line class="st0" x1="117" y1="191.9" x2="117" y2="188.4"/>
                                <line class="st0" x1="122.3" y1="191.9" x2="122.3" y2="188.4"/>
                                <line class="st0" x1="127.6" y1="191.9" x2="127.6" y2="188.4"/>
                                <line class="st0" x1="133" y1="191.9" x2="133" y2="188.4"/>
                                <line class="st0" x1="138.3" y1="191.9" x2="138.3" y2="188.4"/>
                            </g>
                            <g>
                                <rect x="74.3" y="196.1" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="196.1" x2="143.6" y2="199.6"/>
                                <line class="st0" x1="79.7" y1="199.6" x2="79.7" y2="196.1"/>
                                <line class="st0" x1="85.1" y1="199.6" x2="85.1" y2="196.1"/>
                                <line class="st0" x1="90.4" y1="199.6" x2="90.4" y2="196.1"/>
                                <line class="st0" x1="95.7" y1="199.6" x2="95.7" y2="196.1"/>
                                <line class="st0" x1="101" y1="199.6" x2="101" y2="196.1"/>
                                <line class="st0" x1="106.4" y1="199.6" x2="106.4" y2="196.1"/>
                                <line class="st0" x1="111.7" y1="199.6" x2="111.7" y2="196.1"/>
                                <line class="st0" x1="117" y1="199.6" x2="117" y2="196.1"/>
                                <line class="st0" x1="122.3" y1="199.6" x2="122.3" y2="196.1"/>
                                <line class="st0" x1="127.6" y1="199.6" x2="127.6" y2="196.1"/>
                                <line class="st0" x1="133" y1="199.6" x2="133" y2="196.1"/>
                                <line class="st0" x1="138.3" y1="199.6" x2="138.3" y2="196.1"/>
                            </g>
                            <g>
                                <rect x="74.3" y="203.8" class="st0" width="74.6" height="3.5"/>
                                <line class="st0" x1="143.6" y1="203.8" x2="143.6" y2="207.3"/>
                                <line class="st0" x1="79.7" y1="207.3" x2="79.7" y2="203.8"/>
                                <line class="st0" x1="85.1" y1="207.3" x2="85.1" y2="203.8"/>
                                <line class="st0" x1="90.4" y1="207.3" x2="90.4" y2="203.8"/>
                                <line class="st0" x1="95.7" y1="207.3" x2="95.7" y2="203.8"/>
                                <line class="st0" x1="101" y1="207.3" x2="101" y2="203.8"/>
                                <line class="st0" x1="106.4" y1="207.3" x2="106.4" y2="203.8"/>
                                <line class="st0" x1="111.7" y1="207.3" x2="111.7" y2="203.8"/>
                                <line class="st0" x1="117" y1="207.3" x2="117" y2="203.8"/>
                                <line class="st0" x1="122.3" y1="207.3" x2="122.3" y2="203.8"/>
                                <line class="st0" x1="127.6" y1="207.3" x2="127.6" y2="203.8"/>
                                <line class="st0" x1="133" y1="207.3" x2="133" y2="203.8"/>
                                <line class="st0" x1="138.3" y1="207.3" x2="138.3" y2="203.8"/>
                            </g>
                            <g>
                                <polyline class="st0" points="93.7,211.5 148.9,211.5 148.9,215 95.5,215 		"/>
                                <line class="st0" x1="143.6" y1="211.5" x2="143.6" y2="215"/>
                                <line class="st0" x1="101" y1="215" x2="101" y2="211.5"/>
                                <line class="st0" x1="106.4" y1="215" x2="106.4" y2="211.5"/>
                                <line class="st0" x1="111.7" y1="215" x2="111.7" y2="211.5"/>
                                <line class="st0" x1="117" y1="215" x2="117" y2="211.5"/>
                                <line class="st0" x1="122.3" y1="215" x2="122.3" y2="211.5"/>
                                <line class="st0" x1="127.6" y1="215" x2="127.6" y2="211.5"/>
                                <line class="st0" x1="133" y1="215" x2="133" y2="211.5"/>
                                <line class="st0" x1="138.3" y1="215" x2="138.3" y2="211.5"/>
                            </g>
                            <g>
                                <polyline class="st0" points="97.2,219.2 148.9,219.2 148.9,222.8 99,222.8 		"/>
                                <line class="st0" x1="143.6" y1="219.2" x2="143.6" y2="222.8"/>
                                <line class="st0" x1="101" y1="222.8" x2="101" y2="219.2"/>
                                <line class="st0" x1="106.4" y1="222.8" x2="106.4" y2="219.2"/>
                                <line class="st0" x1="111.7" y1="222.8" x2="111.7" y2="219.2"/>
                                <line class="st0" x1="117" y1="222.8" x2="117" y2="219.2"/>
                                <line class="st0" x1="122.3" y1="222.8" x2="122.3" y2="219.2"/>
                                <line class="st0" x1="127.6" y1="222.8" x2="127.6" y2="219.2"/>
                                <line class="st0" x1="133" y1="222.8" x2="133" y2="219.2"/>
                                <line class="st0" x1="138.3" y1="222.8" x2="138.3" y2="219.2"/>
                            </g>
                            <g>
                                <polyline class="st0" points="100.7,226.9 148.9,226.9 148.9,230.5 102.5,230.5 		"/>
                                <line class="st0" x1="143.6" y1="226.9" x2="143.6" y2="230.5"/>
                                <line class="st0" x1="106.4" y1="230.5" x2="106.4" y2="226.9"/>
                                <line class="st0" x1="111.7" y1="230.5" x2="111.7" y2="226.9"/>
                                <line class="st0" x1="117" y1="230.5" x2="117" y2="226.9"/>
                                <line class="st0" x1="122.3" y1="230.5" x2="122.3" y2="226.9"/>
                                <line class="st0" x1="127.6" y1="230.5" x2="127.6" y2="226.9"/>
                                <line class="st0" x1="133" y1="230.5" x2="133" y2="226.9"/>
                                <line class="st0" x1="138.3" y1="230.5" x2="138.3" y2="226.9"/>
                            </g>
                            <g>
                                <polyline class="st0" points="106,234.7 148.9,234.7 148.9,238.2 106,238.2 		"/>
                                <line class="st0" x1="143.6" y1="234.7" x2="143.6" y2="238.2"/>
                                <line class="st0" x1="111.7" y1="238.2" x2="111.7" y2="234.7"/>
                                <line class="st0" x1="117" y1="238.2" x2="117" y2="234.7"/>
                                <line class="st0" x1="122.3" y1="238.2" x2="122.3" y2="234.7"/>
                                <line class="st0" x1="127.6" y1="238.2" x2="127.6" y2="234.7"/>
                                <line class="st0" x1="133" y1="238.2" x2="133" y2="234.7"/>
                                <line class="st0" x1="138.3" y1="238.2" x2="138.3" y2="234.7"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,242.4 148.9,242.4 148.9,245.9 102.5,245.9 		"/>
                                <line class="st0" x1="143.6" y1="242.4" x2="143.6" y2="245.9"/>
                                <line class="st0" x1="106.4" y1="245.9" x2="106.4" y2="242.4"/>
                                <line class="st0" x1="111.7" y1="245.9" x2="111.7" y2="242.4"/>
                                <line class="st0" x1="117" y1="245.9" x2="117" y2="242.4"/>
                                <line class="st0" x1="122.3" y1="245.9" x2="122.3" y2="242.4"/>
                                <line class="st0" x1="127.6" y1="245.9" x2="127.6" y2="242.4"/>
                                <line class="st0" x1="133" y1="245.9" x2="133" y2="242.4"/>
                                <line class="st0" x1="138.3" y1="245.9" x2="138.3" y2="242.4"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,250.1 148.9,250.1 148.9,253.6 102.5,253.6 		"/>
                                <line class="st0" x1="143.6" y1="250.1" x2="143.6" y2="253.6"/>
                                <line class="st0" x1="106.4" y1="253.6" x2="106.4" y2="250.1"/>
                                <line class="st0" x1="111.7" y1="253.6" x2="111.7" y2="250.1"/>
                                <line class="st0" x1="117" y1="253.6" x2="117" y2="250.1"/>
                                <line class="st0" x1="122.3" y1="253.6" x2="122.3" y2="250.1"/>
                                <line class="st0" x1="127.6" y1="253.6" x2="127.6" y2="250.1"/>
                                <line class="st0" x1="133" y1="253.6" x2="133" y2="250.1"/>
                                <line class="st0" x1="138.3" y1="253.6" x2="138.3" y2="250.1"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,257.8 148.9,257.8 148.9,261.3 102.5,261.3 		"/>
                                <line class="st0" x1="143.6" y1="257.8" x2="143.6" y2="261.3"/>
                                <line class="st0" x1="106.4" y1="261.3" x2="106.4" y2="257.8"/>
                                <line class="st0" x1="111.7" y1="261.3" x2="111.7" y2="257.8"/>
                                <line class="st0" x1="117" y1="261.3" x2="117" y2="257.8"/>
                                <line class="st0" x1="122.3" y1="261.3" x2="122.3" y2="257.8"/>
                                <line class="st0" x1="127.6" y1="261.3" x2="127.6" y2="257.8"/>
                                <line class="st0" x1="133" y1="261.3" x2="133" y2="257.8"/>
                                <line class="st0" x1="138.3" y1="261.3" x2="138.3" y2="257.8"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,265.5 148.9,265.5 148.9,269 102.5,269 		"/>
                                <line class="st0" x1="143.6" y1="265.5" x2="143.6" y2="269"/>
                                <line class="st0" x1="106.4" y1="269" x2="106.4" y2="265.5"/>
                                <line class="st0" x1="111.7" y1="269" x2="111.7" y2="265.5"/>
                                <line class="st0" x1="117" y1="269" x2="117" y2="265.5"/>
                                <line class="st0" x1="122.3" y1="269" x2="122.3" y2="265.5"/>
                                <line class="st0" x1="127.6" y1="269" x2="127.6" y2="265.5"/>
                                <line class="st0" x1="133" y1="269" x2="133" y2="265.5"/>
                                <line class="st0" x1="138.3" y1="269" x2="138.3" y2="265.5"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,273.2 148.9,273.2 148.9,276.7 102.5,276.7 		"/>
                                <line class="st0" x1="143.6" y1="273.2" x2="143.6" y2="276.7"/>
                                <line class="st0" x1="106.4" y1="276.7" x2="106.4" y2="273.2"/>
                                <line class="st0" x1="111.7" y1="276.7" x2="111.7" y2="273.2"/>
                                <line class="st0" x1="117" y1="276.7" x2="117" y2="273.2"/>
                                <line class="st0" x1="122.3" y1="276.7" x2="122.3" y2="273.2"/>
                                <line class="st0" x1="127.6" y1="276.7" x2="127.6" y2="273.2"/>
                                <line class="st0" x1="133" y1="276.7" x2="133" y2="273.2"/>
                                <line class="st0" x1="138.3" y1="276.7" x2="138.3" y2="273.2"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,280.9 148.9,280.9 148.9,284.5 102.5,284.5 		"/>
                                <line class="st0" x1="143.6" y1="280.9" x2="143.6" y2="284.5"/>
                                <line class="st0" x1="106.4" y1="284.5" x2="106.4" y2="280.9"/>
                                <line class="st0" x1="111.7" y1="284.5" x2="111.7" y2="280.9"/>
                                <line class="st0" x1="117" y1="284.5" x2="117" y2="280.9"/>
                                <line class="st0" x1="122.3" y1="284.5" x2="122.3" y2="280.9"/>
                                <line class="st0" x1="127.6" y1="284.5" x2="127.6" y2="280.9"/>
                                <line class="st0" x1="133" y1="284.5" x2="133" y2="280.9"/>
                                <line class="st0" x1="138.3" y1="284.5" x2="138.3" y2="280.9"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,288.6 148.9,288.6 148.9,292.2 102.5,292.2 		"/>
                                <line class="st0" x1="143.6" y1="288.6" x2="143.6" y2="292.2"/>
                                <line class="st0" x1="106.4" y1="292.2" x2="106.4" y2="288.6"/>
                                <line class="st0" x1="111.7" y1="292.2" x2="111.7" y2="288.6"/>
                                <line class="st0" x1="117" y1="292.2" x2="117" y2="288.6"/>
                                <line class="st0" x1="122.3" y1="292.2" x2="122.3" y2="288.6"/>
                                <line class="st0" x1="127.6" y1="292.2" x2="127.6" y2="288.6"/>
                                <line class="st0" x1="133" y1="292.2" x2="133" y2="288.6"/>
                                <line class="st0" x1="138.3" y1="292.2" x2="138.3" y2="288.6"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,296.4 148.9,296.4 148.9,299.9 102.5,299.9 		"/>
                                <line class="st0" x1="143.6" y1="296.4" x2="143.6" y2="299.9"/>
                                <line class="st0" x1="106.4" y1="299.9" x2="106.4" y2="296.4"/>
                                <line class="st0" x1="111.7" y1="299.9" x2="111.7" y2="296.4"/>
                                <line class="st0" x1="117" y1="299.9" x2="117" y2="296.4"/>
                                <line class="st0" x1="122.3" y1="299.9" x2="122.3" y2="296.4"/>
                                <line class="st0" x1="127.6" y1="299.9" x2="127.6" y2="296.4"/>
                                <line class="st0" x1="133" y1="299.9" x2="133" y2="296.4"/>
                                <line class="st0" x1="138.3" y1="299.9" x2="138.3" y2="296.4"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,304.1 148.9,304.1 148.9,307.6 102.5,307.6 		"/>
                                <line class="st0" x1="143.6" y1="304.1" x2="143.6" y2="307.6"/>
                                <line class="st0" x1="106.4" y1="307.6" x2="106.4" y2="304.1"/>
                                <line class="st0" x1="111.7" y1="307.6" x2="111.7" y2="304.1"/>
                                <line class="st0" x1="117" y1="307.6" x2="117" y2="304.1"/>
                                <line class="st0" x1="122.3" y1="307.6" x2="122.3" y2="304.1"/>
                                <line class="st0" x1="127.6" y1="307.6" x2="127.6" y2="304.1"/>
                                <line class="st0" x1="133" y1="307.6" x2="133" y2="304.1"/>
                                <line class="st0" x1="138.3" y1="307.6" x2="138.3" y2="304.1"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,311.8 148.9,311.8 148.9,315.3 102.5,315.3 		"/>
                                <line class="st0" x1="143.6" y1="311.8" x2="143.6" y2="315.3"/>
                                <line class="st0" x1="106.4" y1="315.3" x2="106.4" y2="311.8"/>
                                <line class="st0" x1="111.7" y1="315.3" x2="111.7" y2="311.8"/>
                                <line class="st0" x1="117" y1="315.3" x2="117" y2="311.8"/>
                                <line class="st0" x1="122.3" y1="315.3" x2="122.3" y2="311.8"/>
                                <line class="st0" x1="127.6" y1="315.3" x2="127.6" y2="311.8"/>
                                <line class="st0" x1="133" y1="315.3" x2="133" y2="311.8"/>
                                <line class="st0" x1="138.3" y1="315.3" x2="138.3" y2="311.8"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,319.5 148.9,319.5 148.9,323 102.5,323 		"/>
                                <line class="st0" x1="143.6" y1="319.5" x2="143.6" y2="323"/>
                                <line class="st0" x1="106.4" y1="323" x2="106.4" y2="319.5"/>
                                <line class="st0" x1="111.7" y1="323" x2="111.7" y2="319.5"/>
                                <line class="st0" x1="117" y1="323" x2="117" y2="319.5"/>
                                <line class="st0" x1="122.3" y1="323" x2="122.3" y2="319.5"/>
                                <line class="st0" x1="127.6" y1="323" x2="127.6" y2="319.5"/>
                                <line class="st0" x1="133" y1="323" x2="133" y2="319.5"/>
                                <line class="st0" x1="138.3" y1="323" x2="138.3" y2="319.5"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,327.2 148.9,327.2 148.9,330.7 102.5,330.7 		"/>
                                <line class="st0" x1="143.6" y1="327.2" x2="143.6" y2="330.7"/>
                                <line class="st0" x1="106.4" y1="330.7" x2="106.4" y2="327.2"/>
                                <line class="st0" x1="111.7" y1="330.7" x2="111.7" y2="327.2"/>
                                <line class="st0" x1="117" y1="330.7" x2="117" y2="327.2"/>
                                <line class="st0" x1="122.3" y1="330.7" x2="122.3" y2="327.2"/>
                                <line class="st0" x1="127.6" y1="330.7" x2="127.6" y2="327.2"/>
                                <line class="st0" x1="133" y1="330.7" x2="133" y2="327.2"/>
                                <line class="st0" x1="138.3" y1="330.7" x2="138.3" y2="327.2"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,334.9 148.9,334.9 148.9,338.4 102.5,338.4 		"/>
                                <line class="st0" x1="143.6" y1="334.9" x2="143.6" y2="338.4"/>
                                <line class="st0" x1="106.4" y1="338.4" x2="106.4" y2="334.9"/>
                                <line class="st0" x1="111.7" y1="338.4" x2="111.7" y2="334.9"/>
                                <line class="st0" x1="117" y1="338.4" x2="117" y2="334.9"/>
                                <line class="st0" x1="122.3" y1="338.4" x2="122.3" y2="334.9"/>
                                <line class="st0" x1="127.6" y1="338.4" x2="127.6" y2="334.9"/>
                                <line class="st0" x1="133" y1="338.4" x2="133" y2="334.9"/>
                                <line class="st0" x1="138.3" y1="338.4" x2="138.3" y2="334.9"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,342.6 148.9,342.6 148.9,346.2 102.5,346.2 		"/>
                                <line class="st0" x1="143.6" y1="342.6" x2="143.6" y2="346.2"/>
                                <line class="st0" x1="106.4" y1="346.2" x2="106.4" y2="342.6"/>
                                <line class="st0" x1="111.7" y1="346.2" x2="111.7" y2="342.6"/>
                                <line class="st0" x1="117" y1="346.2" x2="117" y2="342.6"/>
                                <line class="st0" x1="122.3" y1="346.2" x2="122.3" y2="342.6"/>
                                <line class="st0" x1="127.6" y1="346.2" x2="127.6" y2="342.6"/>
                                <line class="st0" x1="133" y1="346.2" x2="133" y2="342.6"/>
                                <line class="st0" x1="138.3" y1="346.2" x2="138.3" y2="342.6"/>
                            </g>
                            <g>
                                <polyline class="st0" points="102.5,350.3 148.9,350.3 148.9,353.9 102.5,353.9 		"/>
                                <line class="st0" x1="143.6" y1="350.3" x2="143.6" y2="353.9"/>
                                <line class="st0" x1="106.4" y1="353.9" x2="106.4" y2="350.3"/>
                                <line class="st0" x1="111.7" y1="353.9" x2="111.7" y2="350.3"/>
                                <line class="st0" x1="117" y1="353.9" x2="117" y2="350.3"/>
                                <line class="st0" x1="122.3" y1="353.9" x2="122.3" y2="350.3"/>
                                <line class="st0" x1="127.6" y1="353.9" x2="127.6" y2="350.3"/>
                                <line class="st0" x1="133" y1="353.9" x2="133" y2="350.3"/>
                                <line class="st0" x1="138.3" y1="353.9" x2="138.3" y2="350.3"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="361.6" x2="102.5" y2="361.6"/>
                                <line class="st0" x1="102.5" y1="358.1" x2="141.9" y2="358.1"/>
                                <line class="st0" x1="106.4" y1="361.6" x2="106.4" y2="358.1"/>
                                <line class="st0" x1="111.7" y1="361.6" x2="111.7" y2="358.1"/>
                                <line class="st0" x1="117" y1="361.6" x2="117" y2="358.1"/>
                                <line class="st0" x1="122.3" y1="361.6" x2="122.3" y2="358.1"/>
                                <line class="st0" x1="127.6" y1="361.6" x2="127.6" y2="358.1"/>
                                <line class="st0" x1="133" y1="361.6" x2="133" y2="358.1"/>
                                <line class="st0" x1="138.3" y1="361.6" x2="138.3" y2="358.1"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="369.3" x2="102.5" y2="369.3"/>
                                <line class="st0" x1="102.5" y1="365.8" x2="141.9" y2="365.8"/>
                                <line class="st0" x1="106.4" y1="369.3" x2="106.4" y2="365.8"/>
                                <line class="st0" x1="111.7" y1="369.3" x2="111.7" y2="365.8"/>
                                <line class="st0" x1="117" y1="369.3" x2="117" y2="365.8"/>
                                <line class="st0" x1="122.3" y1="369.3" x2="122.3" y2="365.8"/>
                                <line class="st0" x1="127.6" y1="369.3" x2="127.6" y2="365.8"/>
                                <line class="st0" x1="133" y1="369.3" x2="133" y2="365.8"/>
                                <line class="st0" x1="138.3" y1="369.3" x2="138.3" y2="365.8"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="377" x2="102.5" y2="377"/>
                                <line class="st0" x1="102.5" y1="373.5" x2="141.9" y2="373.5"/>
                                <line class="st0" x1="106.4" y1="377" x2="106.4" y2="373.5"/>
                                <line class="st0" x1="111.7" y1="377" x2="111.7" y2="373.5"/>
                                <line class="st0" x1="117" y1="377" x2="117" y2="373.5"/>
                                <line class="st0" x1="122.3" y1="377" x2="122.3" y2="373.5"/>
                                <line class="st0" x1="127.6" y1="377" x2="127.6" y2="373.5"/>
                                <line class="st0" x1="133" y1="377" x2="133" y2="373.5"/>
                                <line class="st0" x1="138.3" y1="377" x2="138.3" y2="373.5"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="384.7" x2="102.5" y2="384.7"/>
                                <line class="st0" x1="102.5" y1="381.2" x2="140.1" y2="381.2"/>
                                <line class="st0" x1="106.4" y1="384.7" x2="106.4" y2="381.2"/>
                                <line class="st0" x1="111.7" y1="384.7" x2="111.7" y2="381.2"/>
                                <line class="st0" x1="117" y1="384.7" x2="117" y2="381.2"/>
                                <line class="st0" x1="122.3" y1="384.7" x2="122.3" y2="381.2"/>
                                <line class="st0" x1="127.6" y1="384.7" x2="127.6" y2="381.2"/>
                                <line class="st0" x1="133" y1="384.7" x2="133" y2="381.2"/>
                                <line class="st0" x1="138.3" y1="384.7" x2="138.3" y2="381.2"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="392.4" x2="102.5" y2="392.4"/>
                                <line class="st0" x1="102.5" y1="388.9" x2="141.9" y2="388.9"/>
                                <line class="st0" x1="106.4" y1="392.4" x2="106.4" y2="388.9"/>
                                <line class="st0" x1="111.7" y1="392.4" x2="111.7" y2="388.9"/>
                                <line class="st0" x1="117" y1="392.4" x2="117" y2="388.9"/>
                                <line class="st0" x1="122.3" y1="392.4" x2="122.3" y2="388.9"/>
                                <line class="st0" x1="127.6" y1="392.4" x2="127.6" y2="388.9"/>
                                <line class="st0" x1="133" y1="392.4" x2="133" y2="388.9"/>
                                <line class="st0" x1="138.3" y1="392.4" x2="138.3" y2="388.9"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="400.1" x2="102.5" y2="400.1"/>
                                <line class="st0" x1="102.5" y1="396.6" x2="141.9" y2="396.6"/>
                                <line class="st0" x1="106.4" y1="400.1" x2="106.4" y2="396.6"/>
                                <line class="st0" x1="111.7" y1="400.1" x2="111.7" y2="396.6"/>
                                <line class="st0" x1="117" y1="400.1" x2="117" y2="396.6"/>
                                <line class="st0" x1="122.3" y1="400.1" x2="122.3" y2="396.6"/>
                                <line class="st0" x1="127.6" y1="400.1" x2="127.6" y2="396.6"/>
                                <line class="st0" x1="133" y1="400.1" x2="133" y2="396.6"/>
                                <line class="st0" x1="138.3" y1="400.1" x2="138.3" y2="396.6"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="407.9" x2="102.5" y2="407.9"/>
                                <line class="st0" x1="102.5" y1="404.3" x2="141.9" y2="404.3"/>
                                <line class="st0" x1="106.4" y1="407.9" x2="106.4" y2="404.3"/>
                                <line class="st0" x1="111.7" y1="407.9" x2="111.7" y2="404.3"/>
                                <line class="st0" x1="117" y1="407.9" x2="117" y2="404.3"/>
                                <line class="st0" x1="122.3" y1="407.9" x2="122.3" y2="404.3"/>
                                <line class="st0" x1="127.6" y1="407.9" x2="127.6" y2="404.3"/>
                                <line class="st0" x1="133" y1="407.9" x2="133" y2="404.3"/>
                                <line class="st0" x1="138.3" y1="407.9" x2="138.3" y2="404.3"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="415.6" x2="102.5" y2="415.6"/>
                                <line class="st0" x1="102.5" y1="412" x2="141.9" y2="412"/>
                                <line class="st0" x1="106.4" y1="415.6" x2="106.4" y2="412"/>
                                <line class="st0" x1="111.7" y1="415.6" x2="111.7" y2="412"/>
                                <line class="st0" x1="117" y1="415.6" x2="117" y2="412"/>
                                <line class="st0" x1="122.3" y1="415.6" x2="122.3" y2="412"/>
                                <line class="st0" x1="127.6" y1="415.6" x2="127.6" y2="412"/>
                                <line class="st0" x1="133" y1="415.6" x2="133" y2="412"/>
                                <line class="st0" x1="138.3" y1="415.6" x2="138.3" y2="412"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="423.3" x2="106" y2="423.3"/>
                                <line class="st0" x1="102.5" y1="419.8" x2="141.9" y2="419.8"/>
                                <line class="st0" x1="106.4" y1="423.3" x2="106.4" y2="419.8"/>
                                <line class="st0" x1="111.7" y1="423.3" x2="111.7" y2="419.8"/>
                                <line class="st0" x1="117" y1="423.3" x2="117" y2="419.8"/>
                                <line class="st0" x1="122.3" y1="423.3" x2="122.3" y2="419.8"/>
                                <line class="st0" x1="127.6" y1="423.3" x2="127.6" y2="419.8"/>
                                <line class="st0" x1="133" y1="423.3" x2="133" y2="419.8"/>
                                <line class="st0" x1="138.3" y1="423.3" x2="138.3" y2="419.8"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="431" x2="102.5" y2="431"/>
                                <line class="st0" x1="102.5" y1="427.5" x2="141.9" y2="427.5"/>
                                <line class="st0" x1="106.4" y1="431" x2="106.4" y2="427.5"/>
                                <line class="st0" x1="111.7" y1="431" x2="111.7" y2="427.5"/>
                                <line class="st0" x1="117" y1="431" x2="117" y2="427.5"/>
                                <line class="st0" x1="122.3" y1="431" x2="122.3" y2="427.5"/>
                                <line class="st0" x1="127.6" y1="431" x2="127.6" y2="427.5"/>
                                <line class="st0" x1="133" y1="431" x2="133" y2="427.5"/>
                                <line class="st0" x1="138.3" y1="431" x2="138.3" y2="427.5"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="438.7" x2="102.5" y2="438.7"/>
                                <line class="st0" x1="102.5" y1="435.2" x2="141.9" y2="435.2"/>
                                <line class="st0" x1="106.4" y1="438.7" x2="106.4" y2="435.2"/>
                                <line class="st0" x1="111.7" y1="438.7" x2="111.7" y2="435.2"/>
                                <line class="st0" x1="117" y1="438.7" x2="117" y2="435.2"/>
                                <line class="st0" x1="122.3" y1="438.7" x2="122.3" y2="435.2"/>
                                <line class="st0" x1="127.6" y1="438.7" x2="127.6" y2="435.2"/>
                                <line class="st0" x1="133" y1="438.7" x2="133" y2="435.2"/>
                                <line class="st0" x1="138.3" y1="438.7" x2="138.3" y2="435.2"/>
                            </g>
                            <g>
                                <line class="st0" x1="141.9" y1="446.4" x2="102.5" y2="446.4"/>
                                <line class="st0" x1="102.5" y1="442.9" x2="141.9" y2="442.9"/>
                                <line class="st0" x1="106.4" y1="446.4" x2="106.4" y2="442.9"/>
                                <line class="st0" x1="111.7" y1="446.4" x2="111.7" y2="442.9"/>
                                <line class="st0" x1="117" y1="446.4" x2="117" y2="442.9"/>
                                <line class="st0" x1="122.3" y1="446.4" x2="122.3" y2="442.9"/>
                                <line class="st0" x1="127.6" y1="446.4" x2="127.6" y2="442.9"/>
                                <line class="st0" x1="133" y1="446.4" x2="133" y2="442.9"/>
                                <line class="st0" x1="138.3" y1="446.4" x2="138.3" y2="442.9"/>
                            </g>
                            <g>
                                <path class="st0" d="M124.4,31c6.2-0.6,11.1-5.8,11.1-12.2c0-5.9-4.2-10.8-9.7-12c-3.3-4-8.3-6.6-13.9-6.6c-7,0-13.1,4.1-16.1,10
			c-4.7,1.1-8.2,5.3-8.2,10.3c0,5.8,4.8,10.6,10.6,10.6"/>
                                <path class="st0" d="M122,8.2c-2.6-2.6-6.1-4.2-10-4.2c-7.8,0-14.2,6.4-14.2,14.2s6.4,14.2,14.2,14.2s14.2-6.4,14.2-14.2l-14.2,0"
                                />
                            </g>
                            <line class="st0" x1="111.9" y1="32.4" x2="111.9" y2="46"/>
                        </g>
</svg>

                </div>

            </div>
        </section>
    </main>
<?php get_footer(); ?>
