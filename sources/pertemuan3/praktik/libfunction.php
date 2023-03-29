<?php

function winratecheck($win, $lose)
{
  $total_match = $win + $lose;
  return number_format(($win / $total_match) * 100, 0, "", "");
}

function tiercheck($winrate)
{
  if ($winrate >= 70) {
    return "Mythic";
  } elseif ($winrate >= 45) {
    return "Legend";
  } elseif ($winrate >= 20){
    return "Epic";
  } else {
    return "Master";
  } 
};

function predikatcheck($tier){
  switch ($tier) {
    case 'Mythic':
      return "sangat memuaskan";
    case "Legend":
      return "memuaskan";
    default:
      return "sangat mengecewakan";
  }
  
}
