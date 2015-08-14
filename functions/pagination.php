<?php
function pagination($total = 0, $per_page = 0, $base_url = '', $show_page_number = 5)
{
    $link = '';
    
    if($total > 0)
    {
        $total_page = ceil($total/$per_page);
        if(isset($_GET['page']))
        {
            $curr_page  = $_GET['page'];
        }
        else
        {
            $curr_page = 1;
        }
        
        /*
        * Show co gioi han
        */
        $show_page_first    = $curr_page - floor($show_page_number/2);
        $show_page_last     = $curr_page + floor($show_page_number/2);
        
        if($show_page_first <= 0)
        {
            $show_page_first    = 1;
            $show_page_last     = $show_page_number;
        }
        else
        {
            $show_page_first = $show_page_last - $show_page_number + 1;
        }
        
        if($show_page_last > $total_page)
        {
            $show_page_last = $total_page;
            $show_page_first = $show_page_last - ($show_page_number - 1);
        }
        
        if($show_page_first <= 0)
        {
            $show_page_first = 1;
        }
        
        /*
        * Cac nut next, prev, last, first
        */
        $first_page = '';
        $prev_page = '';
        $next_page = '';
        $last_page = '';
        if($show_page_first > 1)
        {
            $first_page = '<a href="'.$base_url.'&page=1"><<</a>';
        }
        
        if($curr_page > $show_page_first)
        {
            $prev_page = '<a href="'.$base_url.'&page='.($curr_page - 1).'"><<</a>';
        }
        
        if($show_page_last < $total_page)
        {
            $last_page = '<a href="'.$base_url.'&page='.$total_page.'">>></a>';
        }
        
        if($curr_page < $show_page_last)
        {
            $next_page = '<a href="'.$base_url.'&page='.($curr_page + 1).'">>></a>';
        }
        
        for($i = $show_page_first; $i <= $show_page_last; $i++)
        {
            if($i == $curr_page)
            {
                $link .= '<span>'.$i.'</span>';
            }
            else
            {
                $link .= '<a href="'.$base_url.'&page='.$i.'">'.$i.'</a> ';
            }
        }
        
        $link = $first_page.$prev_page.$link.$next_page.$last_page;
    }
    
    return $link;
}
?>