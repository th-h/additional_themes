<?php
@define('MIMBO_INSTR','<b>Hinweis:</b> Das Mimbo-Template unterst�tzt - nur auf der Startseite - je ein begleitendes Bild zu einem Eintrag. Damit dieses Feature funktioniert, muss das s9y-Event-Plugin <i>Erweiterte Eigenschaften von Artikeln</i> installiert sein. Zus�tzlich muss in der Konfiguration dieses Plugins unter <i>Freie Felder</i> ein Feld namens MimboImage (Gro�-/Kleinschreibung beachten!) angelegt werden. Dann kann beim Erstellen eines Eintrags diesem unter <i>Erweiterte Optionen</i> ein Bild aus der Mediendatenbank zugewiesen werden. Die empfohlene Gr��e f�r ein solches Bild h�ngt von der Mimbo-Kategorie (siehe unten) ab, welcher der betreffende Eintrag zugeordnet ist.<br /><br /><b>Mimbo-Kategorien:</b> Das Mimbo-Template stellt Eintr�ge auf der Startseite in drei Bereichen dar. Mit den folgenden Auswahllisten k�nnen diesen Mimbo-Kategorien s9y-Kategorien zugeordnet werden. Dabei wird aus der Lead-Kategorie (empfohlene Breite des begleitenden Bildes: maximal 270 Pixel) jeweils der aktuellste Eintrag angezeigt. Aus der Features-Kategorie (empfohlene Breite des begleitenden Bildes: maximal 255 Pixel) werden die drei aktuellsten Eintr�ge als Link angezeigt. Schlie�lich k�nnen drei News-Kategorien ausgew�hlt werden, aus denen jeweils der aktuellste Eintrag (empfohlene Breite des begleitenden Bildes: maximal 60 Pixel) als verk�rzter Teaser angezeigt wird.<br /><br />');
@define('MIMBO_CAT_LEAD','Lead-Kategorie ausw�hlen');
@define('MIMBO_CAT_FEAT','Features-Kategorie ausw�hlen');
@define('MIMBO_CAT_X1','1. News-Kategorie ausw�hlen');
@define('MIMBO_CAT_X2','2. News-Kategorie ausw�hlen');
@define('MIMBO_CAT_X3','3. News-Kategorie ausw�hlen');
@define('MIMBO_CAT_X4','4. News-Kategorie ausw�hlen');
@define('NAVLINK_AMOUNT', 'Anzahl der Links in der Navigationsleiste (Styles verwalten-Seite muss danach neu geladen werden; Link zur Startseite des Blogs wird automatisch eingef�gt)');
@define('NAV_LINK_TEXT', 'Text des Navigationsleisten-Links');
@define('NAV_LINK_URL', 'URL des Navigationsleisten-Links');
@define('HORZ_NAV_LINK_TITLE', 'Horiz. Navigation Link');
@define('DROPDOWN_AMOUNT', 'Anzahl der Dropdown Menuepunkte (Styles verwalten-Seite muss danach neu geladen werden; Link zur Startseite des Blogs wird automatisch eingef�gt)');
@define('DROPDOWN_TEXT', '  Text Dropdown Menuepunkt ');
@define('DROPDOWN_URL', '  URL Dropdown Menuepunkt ');
@define('SBMENUES_AMOUNT', 'Anzahl Menues in der Sidebar (Styles verwalten-Seite muss danach neu geladen werden...)');
@define('SBHEADER_TEXT', 'Menue Ueberschrift');
@define('SBHEADER_URL', 'URL der Menue-Ueberschrift ');
@define('SIDEBARMENUE_AMOUNT', 'Anzahl der Menuepunkte (Styles verwalten-Seite muss danach neu geladen werden ...)');
@define('SIDEBARMENUE_TEXT', 'Text des Menuepunkts');
@define('SIDEBARMENUE_URL', 'URL des Menuepunkts');
@define('SBMENUE_TITLE', 'Menue ');
@define('SB_TARGET', 'Wie soll der Link ge�ffnet werden?');

@define('MIMBO_TAB_X1','1. Tab Kategorie ausw�hlen');
@define('MIMBO_TAB_X2','2. Tab Kategorie ausw�hlen');
@define('MIMBO_TAB_X3','3. Tab Kategorie ausw�hlen');
@define('MIMBO_TAB_X4','4. Tab Kategorieausw�hlen');
@define('INFO_TAB','<b><p style="color:#FFFFFF; background-color: gray"> TAB WINDOW </p></b>');
@define('ENABLECAT_TABA','Tab-Fenster aktivieren?');
@define('ENABLECAT_HMENUE','Horizontalmen� aktivieren?');
@define('ENABLECAT_LEAD','Lead-Kategorie aktivieren?');
@define('MAGAZINE_MODE','Magazin Modus aktivieren?');
@define('INFO_LEAD','<b><p style="color:#000000; background-color:yellow"> Leading WINDOW </p></b>');
@define('INFO_NEWS','<b><p style="color:#ffffff; background-color:darkmagenta"> News Bereich </p></b>');
@define('INFO_FEAT','<b><p style="color:#ffffff; background-color:darkgreen"> Featured Bereich WINDOW </p></b>');
@define('INFO_TABKLOTZAMOUNT','<b><p style="color:#ffffff; background-color:orange"> TAB Klotz WINDOW (TAB Eingabefelder entstehen nach dem Speichern weiter unten)</p></b>');
@define('INFO_SBARMENUESAMOUNT','<b><p style="color:#ffffff; background-color:red"> Zus�tzliche Menues (Menuepunkte entstehen nach dem Speichern weiter unten)(</p></b>');
@define('INFO_HMENUE','<b><p style="color:#ffffff; background-color:#0066FF"> Horizontal-Menue (Menuepunkte entstehen nach dem Speichern weiter unten)</p></b>');
@define('TABKLOTZ_AMOUNT','Anzahl der TAB-Klotz Windows ');
@define('CATBANNER_AMOUNT','Anzahl der Kategoriebanner f�r Kategorie oder Kategorietitelseiten');
@define('KLOTZWIN_NAME','  Eindeutiger Name (muss einmalig sein) ');
@define('ENABLE_TABX1','  1. Tab Kategorie aktivieren? ');
@define('ENABLE_TABX2','  2. Tab Kategorie aktivieren? ');
@define('ENABLE_TABX3','  3. Tab Kategorie aktivieren? ');
@define('ENABLE_STICKY','  4. Tab Kategorie mit Sticky Eintr�gen aktivieren? ');
@define('SICKY_HEADER','  4. Tab �berschrift (Sticky Eintr�ge) : ');
@define('INFO_CBA_AMOUNT','<b><p style="color:#ffffff; background-color:olive">   Kategoriebanner (Die Menuepunkte entstehen nach dem Speichern weiter unten)</p></b>');


@define('SB_POSITION',' Position: ');
@define('ENABLE_FOOTER',' Footer aktivieren? ');
@define('MIMBO_CAT_ROL',' Rollmenue Kategorie ausw�hlen: ');
@define('LEFTSIDEBAR_POS',' Linke sidebar erscheint unter: ');
@define('TABKLOTZ_POSITION',' TAB-Position: ');
@define('TABKLOTZ_HEIGHT',' TAB H�he in px: ');
@define('TABTEXT',' TAB-Text (html): ');
@define('TABKLOTZ_HEIGHT',' TAB-�berschrift: ');
@define('CAT_IMAGE_TITLE',' Kategorie Image ');
@define('CATBANNER_POSITION',' Position des Kategorie Images: ');
@define('IMAGE_TO_CAT',' Zugeh�rige Kategorie: ');
@define('INFO_ROL','<b><p style="color:#000000; background-color:#FFCCFF"> Rollmenue-WINDOW </p></b>');
@define('ENABLECAT_ROL',' Rollmenue aktivieren? ');
@define('CATROL_HEADER',' Rollmenue �berschrift: ');
@define('ENABLE_TOPSIDEBAR',' TAB WINDOW TOP-Sidebar aktivieren? ');
