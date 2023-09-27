<?php

/**
 * Locales
 * -------
 * For a list of supported locale codes, see https://gist.github.com/DenverCoder1/f61147ba26bfcf7c3bf605af7d3382d5
 *
 * Date Format
 * -----------
 * If the default date format for the locale displays correctly, you should omit the date_format parameter.
 * Supplying a date format is optional and will be used instead of the default locale date format.
 *
 * Different year   Same year   Format string
 * --------------   ---------   -------------
 * 10/8/2016        10/8        j/n[/Y]
 * 8/10/2016        8/10        n/j[/Y]
 * 2016.8.10        8.10        [Y.]n.j
 *
 * For info on valid date_format strings, see https://github.com/DenverCoder1/github-readme-streak-stats#date-formats
 *
 * Right-to-Left Language Support
 * ------------------------------
 * To enable right-to-left language support, add `"rtl" => true` to the locale array (see "he" for an example).
 *
 * Aliases
 * -------
 * To add an alias for a locale, add the alias as a key to the locale array with the locale it should redirect to as the value.
 * For example, if "zh" is an alias for "zh_Hans", then `"zh" => "zh_Hans"` would be added to the locale array.
 */

return [
    // "en" is the default locale
    "en" => [
        "Total Contributions" => "Total Contributions",
        "Current Streak" => "Current Streak",
        "Longest Streak" => "Longest Streak",
        "Week Streak" => "Week Streak",
        "Longest Week Streak" => "Longest Week Streak",
        "Present" => "Present",
        "Excluding" => "Excluding",
    ],
    // Locales below are sorted alphabetically
    "am" => [
        "Total Contributions" => "ጠቅላላ አስተዋጽዖዎች",
        "Current Streak" => "የአሁን ድግግሞሽ",
        "Longest Streak" => "በጣም ረጅሙ ድግግሞሽ",
        "Week Streak" => "የሳምንት ድግግሞሽ",
        "Longest Week Streak" => "በጣም ረጅሙ የሳምንት ድግግሞሽ",
        "Present" => "ያሁኑ",
        "Excluding" => "ሳይጨምር",
    ],
    "ar" => [
        "rtl" => true,
        "Total Contributions" => "إجمالي المساهمات",
        "Current Streak" => "السلسلة المتتالية الحالية",
        "Longest Streak" => "أُطول سلسلة متتالية",
        "Week Streak" => "السلسلة المتتالية الأُسبوعية",
        "Longest Week Streak" => "أُطول سلسلة متتالية أُسبوعية",
        "Present" => "الحاضر",
        "Excluding" => "باستثناء",
    ],
    "bg" => [
        "Total Contributions" => "Общ принос",
        "Current Streak" => "Дневна серия",
        "Longest Streak" => "Най-дълга дневна серия",
        "Week Streak" => "Седмична серия",
        "Longest Week Streak" => "Най-дълга седмична серия",
        "Present" => "Сега",
    ],
    "bn" => [
        "Total Contributions" => "মোট অবদান",
        "Current Streak" => "কারেন্ট স্ট্রীক",
        "Longest Streak" => "দীর্ঘতম স্ট্রিক",
        "Week Streak" => "সপ্তাহ স্ট্রীক",
        "Longest Week Streak" => "দীর্ঘতম সপ্তাহ স্ট্রিক",
        "Present" => "বর্তমান",
    ],
    "ca" => [
        "Total Contributions" => "Aportacions totals",
        "Current Streak" => "Ratxa actual",
        "Longest Streak" => "Ratxa més llarga",
        "Week Streak" => "Ratxa setmanal",
        "Longest Week Streak" => "Ratxa setmanal més llarga",
        "Present" => "Actual",
        "Excluding" => "Excloent",
    ],
    "ceb" => [
        "Total Contributions" => "Kinatibuk-ang Kontribusyon",
        "Current Streak" => "Kasamtangan nga Streak",
        "Longest Streak" => "Pinakataas nga Streak",
        "Week Streak" => "Sinemana nga Streak",
        "Longest Week Streak" => "Pinakataas nga Semana nga Streak",
        "Present" => "Karon",
        "Excluding" => "Wala'y Labot",
    ],
    "da" => [
        "Total Contributions" => "Samlet antal bidrag",
        "Current Streak" => "Bidrag i træk",
        "Longest Streak" => "Flest bidrag i træk",
        "Week Streak" => "Ugentlige bidrag i træk",
        "Longest Week Streak" => "Flest ugentlige bidrag i træk",
        "Present" => "Nuværende",
        "Excluding" => "Ekskluderer",
    ],
    "de" => [
        "Total Contributions" => "Gesamte Beiträge",
        "Current Streak" => "Aktuelle Serie",
        "Longest Streak" => "Längste Serie",
        "Week Streak" => "Wochenserie",
        "Longest Week Streak" => "Längste Wochenserie",
        "Present" => "Heute",
        "Excluding" => "Ausgenommen",
    ],
    "el" => [
        "Total Contributions" => "Συνολικές Συνεισφορές",
        "Current Streak" => "Τρέχουσα Σειρά",
        "Longest Streak" => "Μεγαλύτερη Σειρά",
        "Week Streak" => "Εβδομαδιαία Σειρά",
        "Longest Week Streak" => "Μεγαλύτερη Εβδομαδιαία Σειρά",
        "Present" => "Σήμερα",
        "Excluding" => "Εξαιρούνται",
    ],
    "es" => [
        "Total Contributions" => "Contribuciones Totales",
        "Current Streak" => "Racha Actual",
        "Longest Streak" => "Racha Más Larga",
        "Week Streak" => "Racha Semanal",
        "Longest Week Streak" => "Racha Semanal Más Larga",
        "Present" => "Presente",
        "Excluding" => "Excluyendo",
    ],
    "fa" => [
        "rtl" => true,
        "Total Contributions" => "مجموع مشارکت ها",
        "Current Streak" => "پی‌رفت فعلی",
        "Longest Streak" => "طولانی ترین پی‌رفت",
        "Week Streak" => "پی‌رفت هفته",
        "Longest Week Streak" => "طولانی ترین پی‌رفت هفته",
        "Present" => "اکنون",
    ],
    "fil" => [
        "Total Contributions" => "Kabuuang Kontribusyon",
        "Current Streak" => "Kasalukuyang Streak",
        "Longest Streak" => "Pinakamahabang Streak",
        "Week Streak" => "Linggong Streak",
        "Longest Week Streak" => "Pinakamahabang Linggong Streak",
        "Present" => "Kasalukuyan",
        "Excluding" => "Hindi Kasama",
    ],
    "fr" => [
        "Total Contributions" => "Contributions totales",
        "Current Streak" => "Séquence actuelle",
        "Longest Streak" => "Plus longue séquence",
        "Week Streak" => "Séquence de la semaine",
        "Longest Week Streak" => "Plus longue séquence hebdomadaire",
        "Present" => "Aujourd'hui",
        "Excluding" => "À l'exclusion de",
    ],
    "he" => [
        "rtl" => true,
        "Total Contributions" => "סכום התרומות",
        "Current Streak" => "רצף נוכחי",
        "Longest Streak" => "רצף הכי ארוך",
        "Week Streak" => "רצף שבועי",
        "Longest Week Streak" => "רצף שבועי הכי ארוך",
        "Present" => "היום",
        "Excluding" => "לא כולל",
    ],
    "hi" => [
        "Total Contributions" => "कुल योगदान",
        "Current Streak" => "निरंतर दैनिक योगदान",
        "Longest Streak" => "सबसे लंबा दैनिक योगदान",
        "Week Streak" => "सप्ताहिक योगदान",
        "Longest Week Streak" => "दीर्घ साप्ताहिक योगदान",
        "Present" => "आज तक",
        "Excluding" => "के सिवा",
    ],
    "ht" => [
        "Total Contributions" => "kontribisyon total",
        "Current Streak" => "tras aktyèl",
        "Longest Streak" => "tras ki pi long",
        "Week Streak" => "tras semèn",
        "Longest Week Streak" => "pi long tras semèn",
        "Present" => "Prezan",
    ],
    "hu" => [
        "Total Contributions" => "Összes hozzájárulás",
        "Current Streak" => "Jelenlegi sorozat",
        "Longest Streak" => "Leghosszabb sorozat",
        "Week Streak" => "Heti sorozat",
        "Longest Week Streak" => "Leghosszabb heti sorozat",
        "Present" => "Jelen",
        "Excluding" => "Kivéve",
    ],
    "hy" => [
        "Total Contributions" => "Ընդհանուր\nներդրումը",
        "Current Streak" => "Ընթացիկ շարք",
        "Longest Streak" => "Ամենաերկար շարք",
        "Week Streak" => "Ընթացիկ\nշաբաթների շարք",
        "Longest Week Streak" => "Ամենաերկար\nշաբաթների շարք",
        "Present" => "Այժմ",
    ],
    "id" => [
        "Total Contributions" => "Total Kontribusi",
        "Current Streak" => "Aksi Saat Ini",
        "Longest Streak" => "Aksi Terpanjang",
        "Week Streak" => "Aksi Mingguan",
        "Longest Week Streak" => "Aksi Mingguan Terpanjang",
        "Present" => "Sekarang",
        "Excluding" => "Tidak termasuk",
    ],
    "it" => [
        "Total Contributions" => "Contributi Totali",
        "Current Streak" => "Serie Corrente",
        "Longest Streak" => "Serie più Lunga",
        "Week Streak" => "Serie Settimanale",
        "Longest Week Streak" => "Serie Settimanale più Lunga",
        "Present" => "Presente",
        "Excluding" => "Escludendo",
    ],
    "ja" => [
        "date_format" => "[Y.]n.j",
        "Total Contributions" => "総ｺﾝﾄﾘﾋﾞｭｰｼｮﾝ数",
        "Current Streak" => "現在のストリーク",
        "Longest Streak" => "最長のストリーク",
        "Week Streak" => "週間ストリーク",
        "Longest Week Streak" => "最長の週間ストリーク",
        "Present" => "今",
    ],
    "kn" => [
        "Total Contributions" => "ಒಟ್ಟು ಕೊಡುಗೆ",
        "Current Streak" => "ಪ್ರಸ್ತುತ ಸ್ಟ್ರೀಕ್",
        "Longest Streak" => "ಅತ್ಯಧಿಕ ಸ್ಟ್ರೀಕ್",
        "Week Streak" => "ವಾರದ ಸ್ಟ್ರೀಕ್",
        "Longest Week Streak" => "ಅತ್ಯಧಿಕ ವಾರದ ಸ್ಟ್ರೀಕ್",
        "Present" => "ಪ್ರಸ್ತುತ",
        "Excluding" => "ಹೊರತುಪಡಿಸಿ",
    ],
    "ko" => [
        "Total Contributions" => "총 기여 수",
        "Current Streak" => "현재 연속 기여 수",
        "Longest Streak" => "최대 연속 기여 수",
        "Week Streak" => "주간 기여 수",
        "Longest Week Streak" => "최대 주간 기여 수",
        "Present" => "현재",
        "Excluding" => "제외된 날",
    ],
    "mr" => [
        "Total Contributions" => "एकूण योगदान",
        "Current Streak" => "साध्यकालीन सातत्यता",
        "Longest Streak" => "दीर्घकालीन सातत्यता",
        "Week Streak" => "साप्ताहिक सातत्यता",
        "Longest Week Streak" => "दीर्घकालीन साप्ताहिक सातत्यता",
        "Present" => "आज पर्यंत",
    ],
    "ms" => [
        "Total Contributions" => "Jumlah Sumbangan",
        "Current Streak" => "Tindakan Semasa",
        "Longest Streak" => "Tindakan Terpanjang",
        "Week Streak" => "Tindakan Setiap Minggu",
        "Longest Week Streak" => "Tindakan Setiap Minggu Terpanjang",
        "Present" => "Sekarang",
        "Excluding" => "Mengecualikan",
    ],
    "ne" => [
        "Total Contributions" => "कुल योगदान",
        "Current Streak" => "हालको दैनिक योगदान",
        "Longest Streak" => "सबैभन्दा लामो दैनिक योगदान",
        "Week Streak" => "सप्ताहिक योगदान",
        "Longest Week Streak" => "सबैभन्दा लामो साप्ताहिक योगदान",
        "Present" => "आज सम्म",
        "Excluding" => "बाहेक",
    ],
    "nl" => [
        "Total Contributions" => "Totale Bijdrage",
        "Current Streak" => "Huidige Serie",
        "Longest Streak" => "Langste Serie",
        "Week Streak" => "Week Serie",
        "Longest Week Streak" => "Langste Week Serie",
        "Present" => "Vandaag",
        "Excluding" => "Exclusief",
    ],
    "pl" => [
        "Total Contributions" => "Suma Kontrybucji",
        "Current Streak" => "Aktualna Seria",
        "Longest Streak" => "Najdłuższa Seria",
        "Week Streak" => "Seria Tygodni",
        "Longest Week Streak" => "Najdłuższa Seria Tygodni",
        "Present" => "Dziś",
    ],
    "ps" => [
        "rtl" => true,
        "Total Contributions" => "ټولې ونډې",
        "Current Streak" => "اوسنی پرمختګ",
        "Longest Streak" => "تر ټولو اوږد پرمختګ",
        "Week Streak" => "د اونۍ پرمختګ",
        "Longest Week Streak" => "د اونۍ تر ټولو اوږد پرمختګ",
        "Present" => "اوس",
    ],
    "pt_BR" => [
        "Total Contributions" => "Total de Contribuições",
        "Current Streak" => "Sequência Atual",
        "Longest Streak" => "Maior Sequência",
        "Week Streak" => "Sequência Semanal",
        "Longest Week Streak" => "Maior Sequência Semanal",
        "Present" => "Presente",
        "Excluding" => "Exceto",
    ],
    "ru" => [
        "Total Contributions" => "Общий вклад",
        "Current Streak" => "Текущая серия",
        "Longest Streak" => "Самая длинная серия",
        "Week Streak" => "Текущая серия недель",
        "Longest Week Streak" => "Самая длинная серия недель",
        "Present" => "Сейчас",
    ],
    "rw" => [
        "Total Contributions" => "Imisanzu yose",
        "Current Streak" => "Igihe gishize ntaguhagarara",
        "Longest Streak" => "Igihe cyirecyire cyashize ntaguhagarara",
        "Week Streak" => "Igihe gishize ntaguhagarara mu cyumweru",
        "Longest Week Streak" => "Igihe cyirecyire cyashize ntaguhagarara mu byumweru",
        "Present" => "None",
    ],
    "sa" => [
        "Total Contributions" => "कुल योगदानम्",
        "Current Streak" => "क्रमशः दिवसान् चालयन्तु",
        "Longest Streak" => "दीर्घतमाः क्रमशः दिवसाः",
        "Week Streak" => "निरन्तरसप्ताहाः",
        "Longest Week Streak" => "दीर्घतमाः निरन्तरसप्ताहाः",
        "Present" => "वर्तमान",
        "Excluding" => "बहिष्करणम्",
    ],
    "sr" => [
        "Total Contributions" => "Укупно додавања",
        "Current Streak" => "Тренутна серија",
        "Longest Streak" => "Најдужа серија",
        "Week Streak" => "Недељна серија",
        "Longest Week Streak" => "Најдужа недељена серија",
        "Present" => "Данас",
        "Excluding" => "Искључујући",
    ],
    "su" => [
        "Total Contributions" => "Total Kontribusi",
        "Current Streak" => "Aksi Ayeuna",
        "Longest Streak" => "Aksi Pangpanjangna",
        "Week Streak" => "Aksi Unggal Minggon",
        "Longest Week Streak" => "Aksi Unggal Minggon Pangpanjangna",
        "Present" => "Ayeuna",
        "Excluding" => "Teu Kaasup",
    ],
    "sv" => [
        "Total Contributions" => "Totalt antal uppladningar",
        "Current Streak" => "Dagar uppladdat i rad just nu",
        "Longest Streak" => "Längst antal dagar uppladdat i rad",
        "Week Streak" => "Antal veckor i rad",
        "Longest Week Streak" => "Längst antal veckor i rad",
        "Present" => "Just nu",
    ],
    "sw" => [
        "Total Contributions" => "Jumla ya Michango",
        "Current Streak" => "Mfululizo wa sasa",
        "Longest Streak" => "Mfululizo mrefu zaidi",
        "Week Streak" => "Mfululizo wa wiki",
        "Longest Week Streak" => "Mfululizo mrefu zaidi wa wiki",
        "Present" => "Sasa",
    ],
    "ta" => [
        "Total Contributions" => "மொத்த\nபங்களிப்புகள்",
        "Current Streak" => "மிக சமீபத்திய பங்களிப்புகள்",
        "Longest Streak" => "நீண்ட\nபங்களிப்புகள்",
        "Week Streak" => "வார\nபங்களிப்புகள்",
        "Longest Week Streak" => "நீண்ட வார\nபங்களிப்புகள்",
        "Present" => "இன்றுவரை",
    ],
    "th" => [
        "Total Contributions" => "คอนทริบิ้วต์ทั้งหมด",
        "Current Streak" => "สตรีคปัจจุบัน",
        "Longest Streak" => "สตรีคที่ยาวนานที่สุด",
        "Week Streak" => "สตรีคประจำสัปดาห์",
        "Longest Week Streak" => "สตรีคประจำสัปดาห์\nที่ยาวนานที่สุด",
        "Present" => "ปัจจุบัน",
        "Excluding" => "ยกเว้น",
    ],
    "tr" => [
        "Total Contributions" => "Toplam Katkı",
        "Current Streak" => "Güncel Seri",
        "Longest Streak" => "En Uzun Seri",
        "Week Streak" => "Haftalık Seri",
        "Longest Week Streak" => "En Uzun Haftalık Seri",
        "Present" => "Şu an",
        "Excluding" => "Hariç",
    ],
    "uk" => [
        "Total Contributions" => "Загальний вклад",
        "Current Streak" => "Поточна діяльність",
        "Longest Streak" => "Найдовша діяльність",
        "Week Streak" => "Діяльність за тиждень",
        "Longest Week Streak" => "Найбільша к-сть тижнів",
        "Present" => "Наразі",
        "Excluding" => "Виключаючи",
    ],
    "ur_PK" => [
        "rtl" => true,
        "Total Contributions" => "کل حصہ داری",
        "Current Streak" => "موجودہ تسلسل",
        "Longest Streak" => "طویل ترین تسلسل",
        "Week Streak" => "ہفتہ وار تسلسل",
        "Longest Week Streak" => "طویل ترین ہفتہ وار تسلسل",
        "Present" => "حاظر",
        "Excluding" => "خارج",
    ],
    "vi" => [
        "Total Contributions" => "Tổng số đóng góp",
        "Current Streak" => "Chuỗi đóng góp\nhiện tại",
        "Longest Streak" => "Chuỗi đóng góp lớn nhất",
        "Week Streak" => "Chuỗi tuần",
        "Longest Week Streak" => "Chuỗi tuần lớn nhất",
        "Present" => "Hiện tại",
        "Excluding" => "Ngoại trừ",
    ],
    "yo" => [
        "Total Contributions" => "Lapapọ ilowosi",
        "Current Streak" => "ṣiṣan lọwọlọwọ",
        "Longest Streak" => "ṣiṣan ti o gun julọ",
        "Week Streak" => "ṣiṣan ọsẹ",
        "Longest Week Streak" => "gunjulo ọsẹ ṣiṣan",
        "Present" => "lọwọlọwọ",
        "Excluding" => "Yato si",
    ],
    "zh" => "zh_Hans",
    "zh_Hans" => [
        "Total Contributions" => "合计贡献",
        "Current Streak" => "目前连续贡献",
        "Longest Streak" => "最长连续贡献",
        "Week Streak" => "周连续贡献",
        "Longest Week Streak" => "最长周连续贡献",
        "Present" => "至今",
        "Excluding" => "除外",
    ],
    "zh_Hant" => [
        "Total Contributions" => "合計貢獻",
        "Current Streak" => "目前連續貢獻",
        "Longest Streak" => "最長連續貢獻",
        "Week Streak" => "周連續貢獻",
        "Longest Week Streak" => "最常周連續貢獻",
        "Present" => "至今",
        "Excluding" => "除外",
    ],
];
