<?php
    include 'data_team.php';

    function pbl(){
        $dataTeam = team();
        $tanggung_jawab = array(
            'mekanikal'=>'',
            'elektrikal'=>'',
            'programming'=>''
        );
        foreach($dataTeam as $member){
            $bagian = strtolower($member['bagian']);
            if(isset($tanggung_jawab[$bagian])){
                $tanggung_jawab[$bagian] = $member['nama'];
            }
        }
        $dataPBL = array(
            'pbl'=>'Project Base Learning',
            'nama_robot'=>'HeRo',
            'gambar_hero'=>'images/hero.png',
            'icon'=>'images/icon.ico',
            'deskripsi'=>'Proyek HeRo adalah bagian dari pendekatan Project-Based Learning (PBL), yang berfokus pada pengembangan sistem robotika berkelompok (swarm robot) untuk menyelesaikan masalah nyata melalui kolaborasi. Dalam PBL ini, Mahasisiswa belajar dengan cara mengerjakan proyek yang terstruktur, di mana setiap tahap memberikan wawasan langsung mengenai desain, pengembangan, dan implementasi teknologi swarm robotika.',
            'jenis_robot'=>'swarm robot',
            'latar_belakang'=>'Swarm robotik adalah cabang robotika yang mengadaptasi prinsip-prinsip koloni hewan, seperti serangga sosial, untuk mengembangkan sistem robot yang mampu berkolaborasi secara otonom, Proyek ini memberikan kesempatan untuk belajar tentang algoritma navigasi, komunikasi antar robot, dan manajemen sumber daya dalam konteks swarm.',
            'tujuan'=> array(
                'Memahami tentang konsep dasar mengenai swarm pada robot dan mengetahui cara pengaplikasiannya untuk tingkat yang lebih lanjut',
                'Mengembangkan sistem swarm robot yang dapat beroperasi secara otonom dan kolaboratif untuk menyelesaikan tugas-tugas di lingkungan nyata',
                'Menyediakan protokol komunikasi yang memungkinkan koordinasi antar robot untuk membagi tugas secara efisien',
                'Menerapkan strategi navigasi dan penghindaran rintangan secara mandiri dalam kelompok robot'
            ),
            'manfaat'=> array(
                'Sebagai sarana untuk mempelajari konsep swarm robotika, seperti koordinasi, navigasi, dan pembagian tugas secara otonom',
                'Mendorong pengembangan algoritma navigasi otonom, penghindaran rintangan, dan koordinasi multi-robot yang dapat diterapkan pada berbagai skenario.',
                'Melalui kerja sama antar robot, tugas-tugas yang memerlukan pemantauan atau pencarian di area luas dapat dilakukan lebih cepat dan efisien dibandingkan dengan satu robot.',
                'Karena berbasis perangkat keras dan perangkat lunak terbuka, HeRo memungkinkan modifikasi dan pengembangan lebih lanjut untuk berbagai keperluan riset dan aplikasi praktis.',
                'Dengan algoritma manajemen sumber daya yang efisien dan pengaturan daya baterai, proyek ini memberikan solusi robotik dengan durasi operasi yang panjang.'
            ),
            'bagian'=>array(
                'elektrikal'=>array(
                    'penanggung_jawab'=>$tanggung_jawab['elektrikal'],
                    'komponen_elektrikal'=> array(
                        array(
                            'gambar'=>'images/komponen_elektrikal/esp8266.jpg',
                            'nama' => 'ESP 8266',
                            'fungsi' => 'Berperan sebagai mikrokontroler pada swarm robot.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/tcrt5000.jpg',
                            'nama' => 'TCRT5000',
                            'fungsi' => 'Sensor inframerah yang mendeteksi jarak dekat untuk navigasi dan penghindaran rintangan pada robot.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/mux.jpg',
                            'nama' => 'Mux CD4051',
                            'fungsi' => 'Multiplexer untuk memilih antara beberapa sinyal input.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/IRLML2502.jpg',
                            'nama' => 'Mosfet IRLML2502',
                            'fungsi' => 'Dirancang untuk switching daya yang mampu mengendalikan arus tinggi dengan tegangan rendah.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/WS2812B.jpg',
                            'nama' => 'LED WS2812B',
                            'fungsi' => 'Untuk efek pencahayaan yang dinamis pada robot, menambah visualisasi dan komunikasi status.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/Servo.jpg',
                            'nama' => 'Micro Servo 360',
                            'fungsi' => 'Digunakan untuk Aktuator kecil yang menyediakan gerakan sudut presisi dengan kontrol yang akurat.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/encoder.jpg',
                            'nama' => 'Rotary Encoder',
                            'fungsi' => 'Sensor yang mengukur pergerakan rotasi dan posisi poros, digunakan untuk menghitung jarak dan kecepatan dalam sistem odometri pada robot.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/MPU6050.jpg',
                            'nama' => 'MPU 6050 / GY-521',
                            'fungsi' => 'Modul sensor yang menggabungkan akselerometer dan giroskop 6 sumbu untuk menyediakan data orientasi dan percepatan, membantu stabilisasi dan kontrol gerakan robot.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/TP4056.jpg',
                            'nama' => 'TP4056',
                            'fungsi' => 'Digunakan untuk mengisi daya baterai dengan arus konstan dan tegangan tetap.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/MT3608.jpg',
                            'nama' => 'MT3608 STEP-UP',
                            'fungsi' => 'Modul konverter DC-DC step-up yang meningkatkan tegangan input ke level yang lebih tinggi.'
                        ),
                        array(
                            'gambar'=>'images/komponen_elektrikal/Battery.jpg',
                            'nama' => 'Battery LiPo 3,7V 1800mAh',
                            'fungsi' => 'Sumber daya utama robot, baterai LiPo 1800 mAh memberikan daya selama 3 hingga 9 jam, memungkinkan operasi jangka panjang untuk misi otonom.'
                        )    
                    ),
                    'pcb'=>array(
                        'top'=>'images/pcb/pcb_top.png',
                        'bottom'=>'images/pcb/pcb_bottom.png'
                    ),
                    'board'=>array(
                        'board0'=>'images/board/board0.jpg',
                        'board1'=>'images/board/board1.jpg',
                        'board2'=>'images/board/board2.jpg',
                        'board3'=>'images/board/board3.jpg'
                    )
                ),
                'mekanikal'=>array(
                    'penanggung_jawab'=>$tanggung_jawab['mekanikal'],
                    'komponen_mekanikal'=> array(
                        array(
                            'gambar'=>'images/komponen_mekanikal/O-ring.jpg',
                            'nama'=>'Rubber O-ring'
                        ),
                        array(
                            'gambar'=>'images/komponen_mekanikal/Bearing.jpg',
                            'nama'=>'Bearing 623zz'
                        ),
                        array(
                            'gambar'=>'images/komponen_mekanikal/Castor.jpg',
                            'nama'=>'Castor Wheels'
                        ),
                        array(
                            'gambar'=>'images/komponen_mekanikal/Bolt.jpg',
                            'nama'=>'M3x20mm Bolt'
                        ),
                        array(
                            'gambar'=>'images/komponen_mekanikal/Rivets.jpg',
                            'nama'=>'Aluminium Rivets'
                        ) 
                    ),
                    '3d_print'=> array(
                        array(
                            'gambar'=>'images/3d_print/PLA.jpg',
                            'nama'=>'filament PLA'
                        ),
                        array(
                            'gambar'=>'images/3d_print/resin.jpg',
                            'nama'=>'resin'
                        )   
                    ),
                    'cad'=>array(
                        'gambar'=>array(
                            'hero'=>'images/cad/hero.jpg',
                            'draw'=>'images/cad/draw.jpg',
                            'cadTop'=>'images/cad/cadTop.jpg',
                            'cadBottom'=>'images/cad/cadBottom.jpg',
                            'cadFront'=>'images/cad/cadFront.jpg',
                            'cadBack'=>'images/cad/cadBack.jpg',
                            'cadRight'=>'images/cad/cadRight.jpg',
                            'cadLeft'=>'images/cad/cadLeft.jpg'
                        ),
                        'design'=>array(
                            'cad_link'=>'https://myhub.autodesk360.com/ue2ae9b78/g/shares/SH35dfcQT936092f0e43f0476cc132adf984'
                        )    
                    )
                ),
                'programming'=>array(
                    'penanggung_jawab'=>$tanggung_jawab['programming'],
                    'keperluan'=>array(
                        array(
                            'gambar'=>'images/programming/Ubuntu.png',
                            'nama'=>'ubuntu',
                            'sebagai'=>'operating system'
                        ),
                        array(
                            'gambar'=>'images/programming/gazebo.png',
                            'nama'=>'gazebo',
                            'sebagai'=>'3d simulation'
                        ),
                        array(
                            'gambar'=>'images/programming/arduino_ide.png',
                            'nama'=>'arduino ide',
                            'sebagai'=>'firmware'
                        ),
                        array(
                            'gambar'=>'images/programming/Ros.png',
                            'nama'=>'ROS',
                            'sebagai'=>'framework'
                        )
                    ),
                    'flowchart'=>'images/programming/flowchart.jpg',
                    'dsystem'=>'images/programming/dsystem.jpg'
                ),
            ),
            'features'=> array(
                array(
                    'nama' => 'Wheels Encoders (Odometry)',
                    'penjelasan' => 'Mengukur jarak tempuh robot untuk meningkatkan akurasi navigasi.'
                ),
                array(
                    'nama' => 'Inertial Motion Unit (IMU)',
                    'penjelasan' => 'Menyediakan data orientasi dan percepatan untuk meningkatkan stabilitas dan kontrol.'
                ),
                array(
                    'nama' => '8x Long-range IR proximity sensors (20 cm)',
                    'penjelasan' => 'Memungkinkan robot untuk mendeteksi dan menghindari rintangan dengan efisien.'
                ),
                array(
                    'nama' => '2x Addressable RGBA LED',
                    'penjelasan' => 'Memberikan indikator visual status robot dan dapat digunakan dalam komunikasi antar robot.'
                ),
                array(
                    'nama' => 'PID Speed Control',
                    'penjelasan' => 'Mengontrol kecepatan robot secara presisi untuk navigasi yang halus.'
                ),
                array(
                    'nama' => 'Built-in Battery Charge',
                    'penjelasan' => 'Memungkinkan pengisian daya secara otomatis untuk memaksimalkan waktu operasional.'
                ),
                array(
                    'nama' => 'General Purpose Bus on top (I2C/Serial/IO)',
                    'penjelasan' => 'Mempermudah koneksi dan komunikasi dengan perangkat tambahan.'
                ),
                array(
                    'nama' => 'Robust Communication Protocols (TCP/IP)',
                    'penjelasan' => 'Menjamin komunikasi yang andal antara robot dan sistem pengendali.'
                ),
                array(
                    'nama' => 'Small Design',
                    'penjelasan' => 'Desain kompak untuk meningkatkan mobilitas dan fleksibilitas penggunaan.'
                ),
                array(
                    'nama' => 'ROS Compatible',
                    'penjelasan' => 'Mendukung integrasi dengan Robot Operating System untuk pengembangan lebih lanjut.'
                ),
                array(
                    'nama' => 'Gazebo Simulation',
                    'penjelasan' => 'Memungkinkan pengujian dan pengembangan algoritma dalam lingkungan simulasi 3D.'
                )
            ),
            'color_Web'=>array(
                '60%'=>'F6F5F5',
                '30%'=>'FFE3CA',
                '10%'=>'0C359E'
            ),
            'bagian_team'=>$dataTeam
        );
        return $dataPBL;
    } 
?>