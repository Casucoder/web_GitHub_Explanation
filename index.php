<?php

require ('vendor/autoload.php'),
        ('wordpress/wp-load.php'),
        ('../mysql-lite.php'),
        ('villes.php');

use \utilphp\util;


DB('config.php');


if ( DB() == true ){

echo "Quel texte voulez-vous? (Pensez à mettre les variables dedans)";

define("texte", require_once('texte.php'), true);

    if ( defined( $texte) ){

        echo "Combien de mots clefs voulez-vous? (Le nombre de variable)";
        define("nb_mot_clef", ??, true);

        if( defined( $nombre_mot_clef) ){

            echo "Quel mots clefs voulez-vous? (Signaler quel variable = à quoi)";
            define("mot_clef", ??, true);

            if( defined($nom_mot_clef) ){

            echo "Combien d'articles voulez-vous?";
            define("nb_article", ??, true);

                if( defined($nombre_article) ){

                echo "Quel titre d'article voulez-vous? (de préférence réutiliser une varible mit dans le texte";
                define("titre", ??, true);


                    if( defined($titre) ){

                    $nom_of_town = iconv('UTF-8', 'ASCII//TRANSLIT', $nom_of_town);
                    $name = util::slugify($nom_of_town);

                    $my_post = array(
                        'post_author'      => 1,
                        'post_content'     => $texte,
                        'post_title'       => $titre,
                        'post_status'      => 'publish',
                        'comment_status'   => 'open',
                        'ping_status'      => 'open',
                        'post_name'        => $name,
                        'post_type'        => 'post'
                    );

                    $post_id = wp_insert_post( $my_post );

                    }else{

                    echo "Aucun titre d'articles n'a été défini";

                    }

                }else{

                    echo "Aucun nombre d'articles n'a été défini";

                }

            }else{

                echo "Aucun mot clef n'a été défini";

            }

        }else{

            echo "Aucun nombre de mot clef n'a été défini";

        }

    }else{

        echo "Aucun texte n'a été défini";
    
    }

}else{

    echo "Non connecté à une base de donnée";

}
