<?php

$dataFilm = '{
  "Title": "The Graduate",
  "Year": "1967",
  "Rated": "Approved",
  "Released": "22 Dec 1967",
  "Runtime": "106 min",
  "Genre": [
    "Comedy",
    "Drama",
    "Romance"
  ],
  "Director": "Mike Nichols",
  "Writers": [
    "Calder Willingham (screenplay)",
    "Buck Henry (screenplay)",
    "Charles Webb (based on the novel by)"
  ],
  "Actors": [
    "Anne Bancroft",
    "Dustin Hoffman",
    "Katharine Ross",
    "William Daniels"
  ],
  "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
  "Language": "English",
  "Country": "USA",
  "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
  "Poster": "https://asset.kompas.com/crops/ztkfcaYuMSqkl-r7IV-lAmqBOYQ=/0x84:2560x1790/750x500/data/photo/2021/02/04/601b8831c5999.jpg",
  "imdbRating": "8.1",
  "imdbVotes": "183,131",
  "imdbID": "tt0061722"
},
';

$data = json_decode($dataFilm);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Data Film</center>
    <center><b><?php echo $data->Title; ?></b><br>
    <img src="<?php echo $data->Poster; ?>" style="width:300; height: 450px;" alt="" srcset="">
    </center>
    <table>
        <tr>
            <th style="text-align:left;"></th>
            <td><?php echo $data->Plot; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Tahun Rilis</th>
            <td>:<?php echo $data->Year; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Tanggal Rilis</th>
            <td>:<?php echo $data->Released; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Durasi Film</th>
            <td>:<?php echo $data->Runtime; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Genre</th>
            <td>:<?php echo implode(", ", $data->Genre); ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Director</th>
            <td>:<?php echo $data->Director; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Penulis</th>
            <td>
                <?php foreach ($data->Writers as $penulis) {?>
                    <li><?php echo $penulis ?></li>
                   <?php }?>

            </td>
        </tr>
        <tr>
            <th style="text-align:left;">Pemeran</th>
            <td>
                <?php foreach ($data->Actors as $actor) {?>
                    <li><?php echo $actor ?></li>
                   <?php }?>

            </td>
        </tr>
        <tr>
            <th style="text-align:left;">Bahasa</th>
            <td>:<?php echo $data->Language; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Negara</th>
            <td>:<?php echo $data->Country; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Penghargaan</th>
            <td>:<?php echo $data->Awards; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Nilai</th>
            <td>:<?php echo $data->imdbRating; ?></td>
        </tr>
        <tr>
            <th style="text-align:left;">Vote</th>
            <td>:<?php echo $data->imdbVotes; ?> Orang</td>
        </tr>
        <tr>
            <th style="text-align:left;">imdbID</th>
            <td>:<?php echo $data->imdbID; ?> </td>
        </tr>
    </table>
</body>
</html>
