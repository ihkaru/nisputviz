<?php

namespace Database\Seeders;

use App\Models\LinkTableau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkTableauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "link"=>"<div class='tableauPlaceholder' id='viz1657385971517' style='position: relative'><noscript><a href='#'><img
                alt='Dashboard 1'
                src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi_16573857533790&#47;Dashboard1&#47;1_rss.png'
                style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='Visualisasi_16573857533790&#47;Dashboard1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi_16573857533790&#47;Dashboard1&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object></div>
            <script type='text/javascript'>
                var divElement = document.getElementById( 'viz1657385971517' );
                var vizElement = divElement.getElementsByTagName( 'object' )[ 0 ];
                if ( divElement.offsetWidth > 800 )
                {
                    vizElement.style.width = '100%';
                    vizElement.style.height = ( divElement.offsetWidth * 0.75 ) + 'px';
                }
                else if ( divElement.offsetWidth > 500 )
                {
                    vizElement.style.width = '100%';
                    vizElement.style.height = ( divElement.offsetWidth * 0.75 ) + 'px';
                } else
                {
                    vizElement.style.width = '100%';
                    vizElement.style.height = '1377px';
                }
                var scriptElement = document.createElement( 'script' );
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore( scriptElement, vizElement );
            </script>",
                "jenis_dashboard"=> "Dashboard 1",
                "judul"=>"Inter-Regional Input Output (IRIO)"
            ],
            [
                'link'=>"<div class='tableauPlaceholder' id='viz1657502160421' style='position: relative'><noscript><a href='#'><img alt='Dashboard 2 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi2_16575014370030&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Visualisasi2_16575014370030&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi2_16575014370030&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-GB' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1657502160421');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='1077px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>",
                'judul'=>"Struktur Output",
                'jenis_dashboard'=>'Dashboard 2'
            ],
            [
                'link'=>"<div class='tableauPlaceholder' id='viz1657502206135' style='position: relative'><noscript><a href='#'><img alt='Dashboard 3 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi3_16575020246160&#47;Dashboard2&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Visualisasi3_16575020246160&#47;Dashboard2' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi3_16575020246160&#47;Dashboard2&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-GB' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1657502206135');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>",
                'judul'=>"Angka Pengganda <i>(Multiplier)</i>",
                'jenis_dashboard'=>'Dashboard 3'
            ],
        ];
        LinkTableau::insert($data);
    }
}
