# Programmeerimise alused
Antud kursuse raames omandatakse baasteadmised PHP keele alusel.
## Ajakava
### 19.09 Tarkvara paigaldamine ja seadistamine
   ### Paigaldamine
   * [PHP Storm](https://www.jetbrains.com/)
   * [git](https://git-scm.com/)
   
   ### Seadistamine
   * PHP General Settings (line numbers, (soft) wrap)
   * [github.com](https://github.com/) konto loomine
   * [github.com](https://github.com/) repo loomine
   * Version Control (git, github)
   * PhpStorm Version Control Settings (git, github)
   * PhpStorm githubi repo kloneerimine arvutisse
   
### 23.09.2019
#### Git kasutamine käsurealt

Lokaalse git repo initsialiseerimine
```
git init
```
Lisa vastav fail jälgimisele git poolt
```
git add failinimi
```
Koosta muudetud failile kirjeldus
```
git -commit -m "Muudatuste kirjeldus"
```
Lükka muudatused koos kirjeldustega kaugreposse
```
git push -uf origin master
```
Git kasutamine PHPStorm keskkonnas
```
VCS -> Commit (CTRL + K)
```
Vali failid, mille sisu on vaja committida. Määra vastav kirjeldus ning commiti ära.