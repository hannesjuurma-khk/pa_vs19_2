# Päeva teemad
## for-loop
* Kui $counterArv on väiksem arvust 6, teeb tsükkel järgnevat tegevust (iga kord lisatakse $counterArv-ule 1 juurde)
```
<?php
for($counterArv = 1; $counterArv > 6; $count++) {
  TEGEVUS
}
?>
```

* &nbsp - space

## while-loop
* Nii kaua, kui number on väiksem viiest, teeb tsükkel järgnevat tegevust (iga kord lisatakse $number-ile juurde 1
```
<?php
$number = 0

while ($number < 5) {
  TEGEVUS
  $number++;
?>
```

## do-while loop - Teeb kõigepealt ühekorra tegevuse ära ja siis kontrollib alles, kas seda saab teha
<?php
$number = 0

do {
  TEGEVUS
  $number++;
} while ($number < 5);
?>
```
