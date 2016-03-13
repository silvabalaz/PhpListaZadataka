# PhpListaZadataka
Aplikacija za unos liste zadataka.
Osnovnu strukturu web stranice: header, body, footer. 
Unutar body-a se prikazuje grid sa podacima liste, forma za unos novog zapisa te gumb kojim se završava zadatak.
Zapisi se nalaze u tablici Zadaci sa kolonama:
•             datum i vrijeme otvaranja zadatka
•             naslov
•             opis zadatka
•             status (završeno ili ne)
•             datum završetka
Skriptu za kreiranje tablice.
Procedura za unos podataka u gore navedenu tablicu.
Validacija kojom se onemogućava unos dva zapisa istog naslova sa istim statusom, a pri pokušaju takvog unosa informaciju 
zapisati u server log te vratiti pogrešku.

