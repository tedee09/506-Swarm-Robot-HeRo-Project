<?php
    function team(){
        $dataTeam = array(
            'riccy'=> array(
                'foto'=>'images/team/riccy.jpg',
                'nama'=>'riccy',
                'nim'=>'4222211005',
                'bagian'=>'elektrikal',
                'deskripsi'=>'Bertanggung jawab untuk merancang dan mengimplementasikan sistem kelistrikan robot, termasuk sensor dan aktuator.'
            ),
            'dwi'=> array(
                'foto'=>'images/team/dwi.jpg',
                'nama'=>'dwi nur arifin',
                'nim'=>'4222211010',
                'bagian'=>'mekanikal',
                'deskripsi'=>'Bertanggung jawab dalam merancang dan membangun struktur mekanik robot, termasuk pergerakan dan desain fisik.'
            ),
            'antonius'=> array(
                'foto'=>'images/team/antonius.jpg',
                'nama'=>'antonius',
                'nim'=>'4222201059',
                'bagian'=>'programming',
                'deskripsi'=>'Mengembangkan dan mengimplementasikan algoritma kontrol, pemrosesan sinyal, dan komunikasi antar robot.'
            ),
            'tedy'=> array(
                'foto'=>'images/team/tedy.jpg',
                'nama'=>'septedy indrajannah',
                'nim'=>'4222211006',
                'bagian'=>'programming',
                'deskripsi'=>'Mengembangkan dan mengimplementasikan algoritma kontrol, pemrosesan sinyal, dan komunikasi antar robot.'
            )
        );
        return $dataTeam;
    }
?>