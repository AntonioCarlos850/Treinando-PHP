<?php

    $hierarquia = array(    //Crinado um array com arrays dentro, esse array pode ser facilmente um arrquivo de Banco de Dados
        //Início: CEO
        array(
            'nome cargo'=>'CEO',
            'subordinados'=>array(
                //Início: Gerente Financeiro
                array(
                    'nome cargo'=>'Gerente Financeiro',
                    'subordinados'=>array(
                        //Inínio: Diretor Financeiro
                        array(
                            'nome cargo'=>'Diretor Finnceiro',
                            'subordinados'=>array(
                                //Inínio: Administrador Financeiro
                                array(
                                    'nome cargo'=>'Administrador Financeiro'
                                )
                            )
                            //Fim: Administrador Financeiro
                        )
                        //Fim: Diretor Financeiro
                )
            ),
            //Fim: Gerente Financeiro
            //Início: Gerente Administrativo
            array(
                'nome cargo'=>'Gerente Administrativo',
                'subordinados'=>array(
                    //Inínio: Diretor Administrativo
                    array(
                        'nome cargo'=>'Diretor Administrativo'
                    ) //Fim: Diretor Administrativo
                )
            )
            //Fim: Gerente Administrativo
        )
    )
    //Fim: CEO
    );

    function exibe($cargos){    //Criando uma função que exibe os cargos em uma lista ordenada

        $html = '<ul>';


        foreach($cargos as $cargo){ //Usando um foreach para percorrer o array

            $html .='<li>';

            $html .=$cargo['nome cargo'];

            if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){    //usando um if para ver se o cargo possui 
                                                                                        //subordinados
                $html .=exibe($cargo['subordinados']);  //se o cargo possuir subordinados será usada a função dentro dela mesma para
                                                        //exibir os subordinados
            }

            $html .='</li>';

        }

        $html .= '</ul>';

        return $html;

    }

    echo exibe($hierarquia);    //chamando a função
    

?>