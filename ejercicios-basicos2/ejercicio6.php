<?php
$dado1 = rand(1, 6);
echo "<table>";
echo "<tr>";
echo "<td><img src='./img/$dado1.svg'></img></td>";
echo "</tr>";
echo "</table>";
echo "<table><tr>";
switch ($dado1) {
    case 1:
        echo "<td style='font-size:40px;border:1px solid black;padding:20px'>
        <svg width='100px' height='100px'>
            <circle cx='50' cy='50' r='30' fill='red'/>
        </svg>
            </td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>2</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>3</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>4</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>5</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>6</td>";
        break;
    case 2:
        echo "<td style='font-size:40px;border:1px solid black;padding:20px'>1</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>
                <svg width='100px' height='100px'>
                    <circle cx='50' cy='50' r='30' fill='red'/>
                </svg>
             </td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>3</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>4</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>5</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>6</td>";
        break;
    case 3:
        echo "<td style='font-size:40px;border:1px solid black;padding:20px'>1</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>2</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>
                <svg width='100px' height='100px'>
                    <circle cx='50' cy='50' r='30' fill='red'/>
                </svg>
             </td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>4</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>5</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>6</td>";
        break;
    case 4:
        echo "<td style='font-size:40px;border:1px solid black;padding:20px'>1</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>2</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>3</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>
                <svg width='100px' height='100px'>
                    <circle cx='50' cy='50' r='30' fill='red'/>
                </svg>
             </td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>5</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>6</td>";
        break;
    case 5:
        echo "<td style='font-size:40px;border:1px solid black;padding:20px'>1</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>2</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>3</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>4</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>
                <svg width='100px' height='100px'>
                    <circle cx='50' cy='50' r='30' fill='red'/>
                </svg>
             </td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>6</td>";
        break;
    case 6:
        echo "<td style='font-size:40px;border:1px solid black;padding:20px'>1</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>2</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>3</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>4</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>5</td>
             <td style='font-size:40px;border:1px solid black;padding:20px'>
                <svg width='100px' height='100px'>
                    <circle cx='50' cy='50' r='30' fill='red'/>
                </svg>
             </td>";
        break;
    default:
        echo "<table style='border:1px solid black'>
                <td style='font-size:40px;border:1px solid black;padding:20px'>1</td>
                <td style='font-size:40px;border:1px solid black;padding:20px'>2</td>
                <td style='font-size:40px;border:1px solid black;padding:20px'>3</td>
                <td style='font-size:40px;border:1px solid black;padding:20px'>4</td>
                <td style='font-size:40px;border:1px solid black;padding:20px'>5</td>
                <td style='font-size:40px;border:1px solid black;padding:20px'>6</td>";
}
echo "</tr></table>";
?>;
