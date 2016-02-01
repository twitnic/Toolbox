=== Toolbox ===
Contributors: sergej.mueller
Tags: tools, functions, modules
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZAQUT9RLPW8QN
Requires at least: 3.3
Tested up to: 4.0.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



Werkzeugkoffer für die Modularisierung der functions.php. WordPress Snippets bequem und übersichtlich als Module verwalten.



== Description ==

= Bausteinsystem =
Vergrößert sich der Funktionsumfang eines WordPress-Blogs, so steigt entweder die Anzahl der installierten Plugins oder die *functions.php* im Theme wächst durch einen stetigen Neuzugang an Code-Fragmenten.

Und da kleinere Funktionsaufrufe kaum als Plugin-Lösungen zur Verfügung stehen, werden diese gern in die besagte Erweiterungsdatei eingefügt. Im Laufe der Zeit und Entwicklung wird die Datei *functions.php* schlicht und einfach unübersichtlich und überdimensioniert. Zudem kommt die Tatsache, dass WordPress die Datei sowohl im Blog-Frontend wie auch im Admin-Bereich einbindet und ausführt.

*Toolbox* wurde konzipiert, um die *functions.php* zu entlasten oder gänzlich abzuschaffen. Das Prinzip: Gruppierte Code-Snippets aus *functions.php* werden in Module zusammengefasst - dafür wird jeweils eine PHP-Datei angelegt und mit notwendigen, optionalen Metadaten versehen. Anschließend lädt der Admin die Module ins Toolbox-Verzeichnis *modules* hoch.

Ab diesem Moment übernimmt das Plugin die Steuerung der Code-Schnipsel: Der Administrator legt fest, in welchem Bereich genau das Modul ausgeführt werden soll. Es kann zwischen *Nur im Frontend*, *Nur im Backend* und *Im Front- und Backend* gewählt werden. Einzelne Module lassen sich jederzeit abschalten.

Auf diese Weise müssen WordPress-Hooks und andere Funktionserweiterungen nicht länger als Plugins in Betrieb genommen werden, um überschaubar und übertragbar zu sein. Als Toolbox-Modul ist der Code zugänglich abgelegt und kann mühelos gepflegt werden.

= Stärken =
* Ein- und abschaltbar
* Zeitsparendes Management der Module
* Ausstattung der Module mit Metadaten
* Kombinierbare Bereiche der Einbindung
* Kein Durcheinander in der *functions.php*
* Ordnung durch angelegte Toolbox-Module
* Einfache Weitergabe der WordPress-Snippets
* Modus für mehr Sicherheit beim Ausführen der Module

= Systemanforderungen =
* PHP ab 5.3
* WordPress ab 3.3

= Dokumentation =
* [Toolbox: WordPress Snippets als Module](http://playground.ebiene.de/toolbox-wordpress-plugin/ "Toolbox: WordPress Snippets als Module")

= Unterstützung =
* Per [Flattr](https://flattr.com/thing/818f7271bb99b074f3e0d749db181f17)
* Per [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZAQUT9RLPW8QN)

= Autor =
* [Google+](https://plus.google.com/110569673423509816572 "Google+")
* [Plugins](http://wpcoder.de "Plugins")
* [Portfolio](http://ebiene.de "Portfolio")



== Changelog ==

= 0.1 =
* Toolbox geht online



== Screenshots ==

1. Toolbox Optionen