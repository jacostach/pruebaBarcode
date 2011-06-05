<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tools
 *
 * @author eanaya
 */
class My_Tools
{

    /**
     * @link http://css-tricks.com/snippets/php/time-ago-function/
     * @param  String
     * @return string
     */
    public static function hace($diahora)
    {
        $rcs = 0;
        $tm = strtotime($diahora);
        $cur_tm = time();
        $dif = $cur_tm - $tm;
        $pds = array('segundo', 'minuto', 'hora', 'dia', 'semana', 'mes', 'año', 'decada');
        $lngh = array(1, 60, 3600, 86400, 604800, 2630880, 31570560, 315705600);
        for ($v = sizeof($lngh) - 1; ($v >= 0) && (($no = $dif / $lngh[$v]) <= 1); $v--);
            if ($v < 0)
                $v = 0; $_tm = $cur_tm - ($dif % $lngh[$v]);
        $no = floor($no);
        if ($no <> 1)
            $pds[$v] .= substr($pds[$v],-1)=='s'?'es':'s';
        $x = sprintf("%d %s ", $no, $pds[$v]);
        if (($rcs == 1) && ($v >= 1) && (($cur_tm - $_tm) > 0))
            $x .= time_ago($_tm);
        return 'hace '.$x;
    }

}

?>
