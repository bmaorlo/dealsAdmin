var Translator = (function (document, undefined) {
  var _messages = {},
    _domains = [],
    _sPluralRegex = new RegExp(/^\w+\: +(.+)$/),
    _cPluralRegex = new RegExp(
      /^\s*((\{\s*(\-?\d+[\s*,\s*\-?\d+]*)\s*\})|([\[\]])\s*(-Inf|\-?\d+)\s*,\s*(\+?Inf|\-?\d+)\s*([\[\]]))\s?(.+?)$/
    ),
    _iPluralRegex = new RegExp(
      /^\s*(\{\s*(\-?\d+[\s*,\s*\-?\d+]*)\s*\})|([\[\]])\s*(-Inf|\-?\d+)\s*,\s*(\+?Inf|\-?\d+)\s*([\[\]])/
    )
  function replace_placeholders(message, placeholders) {
    var _i,
      _prefix = Translator.placeHolderPrefix,
      _suffix = Translator.placeHolderSuffix
    for (_i in placeholders) {
      var _r = new RegExp(_prefix + _i + _suffix, 'g')
      if (_r.test(message)) {
        message = message.replace(_r, placeholders[_i])
      }
    }
    return message
  }
  function get_message(id, domain, locale, currentLocale, localeFallback) {
    var _locale = locale || currentLocale || localeFallback,
      _domain = domain
    if (undefined == _messages[_locale]) {
      if (undefined == _messages[localeFallback]) {
        return id
      }
      _locale = localeFallback
    }
    if (undefined === _domain || null === _domain) {
      for (var i = 0; i < _domains.length; i++) {
        if (undefined != _messages[_locale][_domains[i]] && undefined != _messages[_locale][_domains[i]][id]) {
          _domain = _domains[i]
          break
        }
      }
    }
    if (undefined != _messages[_locale][_domain] && undefined != _messages[_locale][_domain][id]) {
      return _messages[_locale][_domain][id]
    }
    return id
  }
  function getCookie(cname) {
    var name = cname + '='
    var decodedCookie = decodeURIComponent(document.cookie)
    var ca = decodedCookie.split(';')
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i]
      while (c.charAt(0) == ' ') {
        c = c.substring(1)
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length)
      }
    }
    return ''
  }
  function pluralize(message, number, locale) {
    var _p,
      _e,
      _explicitRules = [],
      _standardRules = [],
      _parts = message.split(Translator.pluralSeparator),
      _matches = []
    for (_p in _parts) {
      var _part = _parts[_p]
      if (_cPluralRegex.test(_part)) {
        _matches = _part.match(_cPluralRegex)
        _explicitRules[_matches[0]] = _matches[_matches.length - 1]
      } else if (_sPluralRegex.test(_part)) {
        _matches = _part.match(_sPluralRegex)
        _standardRules.push(_matches[1])
      } else {
        _standardRules.push(_part)
      }
    }
    for (_e in _explicitRules) {
      if (_iPluralRegex.test(_e)) {
        _matches = _e.match(_iPluralRegex)
        if (_matches[1]) {
          var _ns = _matches[2].split(','),
            _n
          for (_n in _ns) {
            if (number == _ns[_n]) {
              return _explicitRules[_e]
            }
          }
        } else {
          var _leftNumber = convert_number(_matches[4])
          var _rightNumber = convert_number(_matches[5])
          if (
            ('[' === _matches[3] ? number >= _leftNumber : number > _leftNumber) &&
            (']' === _matches[6] ? number <= _rightNumber : number < _rightNumber)
          ) {
            return _explicitRules[_e]
          }
        }
      }
    }
    return _standardRules[plural_position(number, locale)] || _standardRules[0] || undefined
  }
  function convert_number(number) {
    if ('-Inf' === number) {
      return Number.NEGATIVE_INFINITY
    } else if ('+Inf' === number || 'Inf' === number) {
      return Number.POSITIVE_INFINITY
    }
    return parseInt(number, 10)
  }
  function plural_position(number, locale) {
    var _locale = locale
    if ('pt_BR' === _locale) {
      _locale = 'xbr'
    }
    if (_locale.length > 3) {
      _locale = _locale.split('_')[0]
    }
    switch (_locale) {
      case 'bo':
      case 'dz':
      case 'id':
      case 'ja':
      case 'jv':
      case 'ka':
      case 'km':
      case 'kn':
      case 'ko':
      case 'ms':
      case 'th':
      case 'tr':
      case 'vi':
      case 'zh':
        return 0
      case 'af':
      case 'az':
      case 'bn':
      case 'bg':
      case 'ca':
      case 'da':
      case 'de':
      case 'el':
      case 'en':
      case 'eo':
      case 'es':
      case 'et':
      case 'eu':
      case 'fa':
      case 'fi':
      case 'fo':
      case 'fur':
      case 'fy':
      case 'gl':
      case 'gu':
      case 'ha':
      case 'he':
      case 'hu':
      case 'is':
      case 'it':
      case 'ku':
      case 'lb':
      case 'ml':
      case 'mn':
      case 'mr':
      case 'nah':
      case 'nb':
      case 'ne':
      case 'nl':
      case 'nn':
      case 'no':
      case 'om':
      case 'or':
      case 'pa':
      case 'pap':
      case 'ps':
      case 'pt':
      case 'so':
      case 'sq':
      case 'sv':
      case 'sw':
      case 'ta':
      case 'te':
      case 'tk':
      case 'ur':
      case 'zu':
        return number == 1 ? 0 : 1
      case 'am':
      case 'bh':
      case 'fil':
      case 'fr':
      case 'gun':
      case 'hi':
      case 'ln':
      case 'mg':
      case 'nso':
      case 'xbr':
      case 'ti':
      case 'wa':
        return number === 0 || number == 1 ? 0 : 1
      case 'be':
      case 'bs':
      case 'hr':
      case 'ru':
      case 'sr':
      case 'uk':
        return number % 10 == 1 && number % 100 != 11
          ? 0
          : number % 10 >= 2 && number % 10 <= 4 && (number % 100 < 10 || number % 100 >= 20)
          ? 1
          : 2
      case 'cs':
      case 'sk':
        return number == 1 ? 0 : number >= 2 && number <= 4 ? 1 : 2
      case 'ga':
        return number == 1 ? 0 : number == 2 ? 1 : 2
      case 'lt':
        return number % 10 == 1 && number % 100 != 11
          ? 0
          : number % 10 >= 2 && (number % 100 < 10 || number % 100 >= 20)
          ? 1
          : 2
      case 'sl':
        return number % 100 == 1 ? 0 : number % 100 == 2 ? 1 : number % 100 == 3 || number % 100 == 4 ? 2 : 3
      case 'mk':
        return number % 10 == 1 ? 0 : 1
      case 'mt':
        return number == 1
          ? 0
          : number === 0 || (number % 100 > 1 && number % 100 < 11)
          ? 1
          : number % 100 > 10 && number % 100 < 20
          ? 2
          : 3
      case 'lv':
        return number === 0 ? 0 : number % 10 == 1 && number % 100 != 11 ? 1 : 2
      case 'pl':
        return number == 1
          ? 0
          : number % 10 >= 2 && number % 10 <= 4 && (number % 100 < 12 || number % 100 > 14)
          ? 1
          : 2
      case 'cy':
        return number == 1 ? 0 : number == 2 ? 1 : number == 8 || number == 11 ? 2 : 3
      case 'ro':
        return number == 1 ? 0 : number === 0 || (number % 100 > 0 && number % 100 < 20) ? 1 : 2
      case 'ar':
        return number === 0
          ? 0
          : number == 1
          ? 1
          : number == 2
          ? 2
          : number >= 3 && number <= 10
          ? 3
          : number >= 11 && number <= 99
          ? 4
          : 5
      default:
        return 0
    }
  }
  function exists(array, element) {
    for (var i = 0; i < array.length; i++) {
      if (element === array[i]) {
        return true
      }
    }
    return false
  }
  function get_current_locale() {
    return document.documentElement.lang
  }
  return {
    locale: get_current_locale(),
    fallback: 'en',
    placeHolderPrefix: '%',
    placeHolderSuffix: '%',
    defaultDomain: 'deals',
    pluralSeparator: '|',
    toString: function (lang, id) {
      let resString = ``
      const obj = _messages[lang][id]
      const resObj = {}
      for (const key in obj) {
        const [, propName, intPropName] = key.split('.')
        resObj[propName] = { ...resObj[propName], [intPropName]: obj[key] }
      }
      for (const key in resObj) {
        resString = resString + '\n' + `${key}:`
        const intObj = resObj[key]
        for (const key in intObj) {
          resString = resString + `\n  ${key}:'${intObj[key]}'`
        }
      }
      console.log(resString)
    },
    add: function (id, message, domain, locale) {
      var _locale = locale || this.locale || this.fallback,
        _domain = domain || this.defaultDomain
      if (!_messages[_locale]) {
        _messages[_locale] = {}
      }
      if (!_messages[_locale][_domain]) {
        _messages[_locale][_domain] = {}
      }
      _messages[_locale][_domain][id] = message
      if (false === exists(_domains, _domain)) {
        _domains.push(_domain)
      }
      return this
    },
    trans: function (id, parameters, domain, locale) {
      if (getCookie('transHelper') == '1') {
        if (domain !== undefined) {
          return id
        } else {
          return domain + '|' + id
        }
      }
      var _message = get_message(id, domain, locale, this.locale, this.fallback)
      return replace_placeholders(_message, parameters || {})
    },
    transChoice: function (id, number, parameters, domain, locale) {
      var _message = get_message(id, domain, locale, this.locale, this.fallback)
      var _number = parseInt(number, 10)
      if (undefined != _message && !isNaN(_number)) {
        _message = pluralize(_message, _number, locale || this.locale || this.fallback)
      }
      return replace_placeholders(_message, parameters || {})
    },
    fromJSON: function (data) {
      if (typeof data === 'string') {
        data = JSON.parse(data)
      }
      if (data.locale) {
        this.locale = data.locale
      }
      if (data.fallback) {
        this.fallback = data.fallback
      }
      if (data.defaultDomain) {
        this.defaultDomain = data.defaultDomain
      }
      if (data.translations) {
        for (var locale in data.translations) {
          for (var domain in data.translations[locale]) {
            for (var id in data.translations[locale][domain]) {
              this.add(id, data.translations[locale][domain][id], domain, locale)
            }
          }
        }
      }
      return this
    },
    reset: function () {
      _messages = {}
      _domains = []
      this.locale = get_current_locale()
    }
  }
})(document, undefined)
// if (typeof window.define === 'function' && window.define.amd) {
//   window.define('Translator', [], function() {
//     return Translator
//   })
// }

window.Translator = Translator

function translatorLib(Translator) {
  // for Filters
  Translator.add('deals.filter.available', 'זמינות', 'deals', 'en')
  Translator.add('deals.filter.results', 'תוצאות', 'deals', 'en')
  Translator.add('deals.filter.cities', 'ערים', 'deals', 'en')
  Translator.add('deals.filter.placeholderCities', 'חפש', 'deals', 'en')
  Translator.add('deals.filter.airport', 'שדות תעופה', 'deals', 'en')
  Translator.add('deals.filter.locationTheme', 'נושא החופשה', 'deals', 'en')
  Translator.add('deals.filter.stars', 'כוכבים', 'deals', 'en')
  Translator.add('deals.filter.monthOfTheYear', 'בחודש', 'deals', 'en')
  Translator.add('deals.filter.nights', 'מספר לילות', 'deals', 'en')
  Translator.add('deals.filter.when', 'מתי', 'deals', 'en')
  Translator.add('deals.filter.ratings', 'דירוג מלון', 'deals', 'en')
  Translator.add('deals.filter.clearAll', 'בקה הכל', 'deals', 'en')
  Translator.add('deals.filter.cancel', 'בטל', 'deals', 'en')
  Translator.add('deals.filter.done', 'בצע', 'deals', 'en')
  // for Chips
  Translator.add('deals.chips.clearAll', 'נקה הכל', 'deals', 'en')
  Translator.add('deals.chips.cities', 'ערים', 'deals', 'en')
  Translator.add('deals.chips.nights', 'לילות', 'deals', 'en')
  Translator.add('deals.chips.theme', 'נושא', 'deals', 'en')
  Translator.add('deals.chips.preferedVacation', 'מתי', 'deals', 'en')
  Translator.add('deals.chips.hotelStars', 'כוכבים', 'deals', 'en')
  Translator.add('deals.chips.airports', 'שדות תעופה', 'deals', 'en')
  Translator.add('deals.chips.dates', 'תאריכים', 'deals', 'en')
  Translator.add('deals.chips.hotelRating', 'דירוג מלון', 'deals', 'en')
  // for DealContent
  Translator.add('deals.dealList.noFlights', 'אין תוצאות', 'deals', 'en')
  Translator.add('deals.dealItem.deals', 'דילים', 'deals', 'en')
  Translator.add('deals.dealItem.hotelFlight', 'מלון + טיסה', 'deals', 'en')
  Translator.add('deals.dealItem.moreOffers', ' תוצאות נוספות', 'deals', 'en')
  Translator.add('deals.dealContent.from', 'מ', 'deals', 'en')
  Translator.add('deals.dealContent.perPerson', 'לנוסע', 'deals', 'en')
  Translator.add('deals.dealContent.details', 'פרטים', 'deals', 'en')
  Translator.add('deals.dealContent.nights', 'לילות', 'deals', 'en')
  Translator.add('deals.dealContent.flight', 'טיסה', 'deals', 'en')
  Translator.add('deals.dealContent.inboundFlight', 'טיסה חזור', 'deals', 'en')
  Translator.add('deals.dealContent.outboundFlight', 'טיסה הלוך', 'deals', 'en')
  Translator.add('deals.dealContent.landingTime', 'זמן נחיתה', 'deals', 'en')
  Translator.add('deals.dealContent.directFlight', 'טיסה ישירה', 'deals', 'en')
  Translator.add('deals.dealContent.stops', 'עצירות', 'deals', 'en')
  Translator.add('deals.dealContent.departure', 'יציאה', 'deals', 'en')
  Translator.add('deals.dealContent.return', 'חזרה', 'deals', 'en')
  Translator.add('deals.dealContent.accomodation', 'מלון', 'deals', 'en')
  Translator.add('deals.dealContent.best', 'טוב מאוד', 'deals', 'en')
  Translator.add('deals.dealContent.excelent', 'מעולה', 'deals', 'en')
  Translator.add('deals.dealContent.good', 'טוב', 'deals', 'en')
  Translator.add('deals.dealContent.reviews', 'חוות דעת', 'deals', 'en')
  Translator.add('deals.dealContent.reservation', 'הזמן', 'deals', 'en')
  Translator.add('deals.dealContent.from', 'מ', 'deals', 'en')
  Translator.add('deals.dealContent.dealDetails', 'פרטים', 'deals', 'en')
//
  Translator.add('deals.cityDeals.resultFor', 'תוצאות ל', 'deals', 'en')
  
  Translator.add('deals.months.January', 'ינואר', 'deals', 'en')
  Translator.add('deals.months.February', 'פברואר', 'deals', 'en')
  Translator.add('deals.months.March', 'מרץ', 'deals', 'en')
  Translator.add('deals.months.April', 'אפריל', 'deals', 'en')
  Translator.add('deals.months.May', 'מאי', 'deals', 'en')
  Translator.add('deals.months.June', 'יוני', 'deals', 'en')
  Translator.add('deals.months.July', 'יולי', 'deals', 'en')
  Translator.add('deals.months.August', 'אוגוסט', 'deals', 'en')
  Translator.add('deals.months.September', 'ספטמבר', 'deals', 'en')
  Translator.add('deals.months.October', 'אוקטובר', 'deals', 'en')
  Translator.add('deals.months.November', 'נובמבר', 'deals', 'en')
  Translator.add('deals.months.December', 'דצמבר', 'deals', 'en')
  //
  Translator.add('deals.months.Sunday', 'ראשון', 'deals', 'en')
  Translator.add('deals.months.Monday', 'שני', 'deals', 'en')
  Translator.add('deals.months.Tuesday', 'שלישי', 'deals', 'en')
  Translator.add('deals.months.Wednesday', 'רביעי', 'deals', 'en')
  Translator.add('deals.months.Thursday', 'חמישי', 'deals', 'en')
  Translator.add('deals.months.Friday', 'שישי', 'deals', 'en')
  Translator.add('deals.months.Saturday', 'שבת', 'deals', 'en')
}

// import translate from '../functions/translator'
// translate('deals.dealItem.moreOffers')

translatorLib(Translator)
