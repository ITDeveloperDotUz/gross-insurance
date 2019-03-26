function ntw(num){
    if(Number.isInteger(+num)){
        num = [num, '00'];
    } else if ( +num === Number(+num) && +num % 1 !== 0) {
        num = ('' + num).split('.');
    }

    var ru = {
        once: ['', ['один', 'одна'], ['два', 'две'], 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять', 'десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать'],
        tens: ['', '', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяноста'],
        hundereds: ['', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шесьтсот', 'семьсот', 'восемьсот', 'девятьсот'],
        scales: ['тысяч', 'миллион', 'миллиард', 'триллион', 'квадриллион', 'квинтиллион', 'секстиллион', 'септиллион', 'октиллион', 'нониллион', 'дециллион', 'ундециллион', 'дуодециллион'],
        get: function(word, scale, scaling, num){
            return this.correct(word, scale, scaling, num);
        },
        correct: function(word, scale, scaling, num){
            if(scaling == 2 && scale == 'тысяч'){

                switch(((word instanceof Array)?word[0]:word)){
                    case 'один': return word[1] + ' ' + scale + 'а';
                    case 'два': return word[1] + ' ' + scale + 'и';
                    case 'три': return word + ' ' + scale + 'и';
                    case 'четыре': return word + ' ' + scale + 'и';
                    default: return word + ' ' + scale;
                }
            } else if (scaling == 2 && scale) {
                switch(((word instanceof Array)?word[0]:word)){
                    case 'один': return word[0] + ' ' + scale + '';
                    case 'два': return word[0] + ' ' + scale + 'а';
                    case 'три': return word + ' ' + scale + 'а';
                    case 'четыре': return word + ' ' + scale + 'а';
                    default: return word + ' ' + scale + 'ов';
                }
            } else {
                return (word instanceof Array) ? word[0] : word;
            }
        },
        zero: 'ноль'
    };
    return '(' + generate( num[0], ru) + ' сум ' + num[1] + ' тийин)';

    function separate(num){
        var nparts = num.toString().split('.');
        nparts[0] = nparts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        return nparts.join('.');
    }

    function generate(num, language){
        let readable = separate(num),
            parts = readable.split('.'),
            chunks = parts[0].split(',').reverse();

        let finalNumber = [];
        if(num == 0){
            return language.zero;
        } else if ( chunks.length == 1 ){
            finalNumber[0] = getHundereds(chunks[0], language, false);
        } else {
            for(let i = 0; i < chunks.length; i++){
                finalNumber[i] = getHundereds(chunks[i], language, language.scales[i-1]);
            }
        }
        return (finalNumber.reverse().join(' '));
    }

    function getHundereds(integer, lang, scale){
        var intarr = integer.toString().split('');
        switch(intarr.length){
            case 2: intarr.unshift('0');	break;
            case 1: intarr.unshift('0', '0');	break;
        }

        var hun = (integer > 99) ? lang.get(lang.hundereds[intarr[0]], scale, 0, integer) : '',
            ten = (integer > 9) ? lang.get(lang.tens[intarr[1]], scale, 1, integer) : '',
            one = (integer > 0) ? lang.get(lang.once[intarr[2]], scale, 2, integer) : '';
        if ( intarr[1] == 1 ){
            ten = lang.get(lang.once[intarr[1]+intarr[2]], scale, 2, integer);
            one = '';
        }
        return hun + ' ' + ten + ' ' + one;
    }

}