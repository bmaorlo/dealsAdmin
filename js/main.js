(this.webpackJsonpproto=this.webpackJsonpproto||[]).push([[0],{1:function(e,t,a){e.exports={wrapper:"DealItem_wrapper__2f1kL",wrapperCaption:"DealItem_wrapperCaption__2aqdb",image:"DealItem_image__qHEgN",blur:"DealItem_blur__2rcJ3",blurWrapper:"DealItem_blurWrapper__3V4sF",blurImage:"DealItem_blurImage__2_mJD",location:"DealItem_location__2xFm8",caption:"DealItem_caption__3BgWJ",caption_link:"DealItem_caption_link__2GW21",contentList:"DealItem_contentList__3qBLD",content:"DealItem_content__2ixEz",activeContent:"DealItem_activeContent__2lrap",contentWrap:"DealItem_contentWrap__2G3kI",hotelInformation:"DealItem_hotelInformation__1dwO0",dayNames:"DealItem_dayNames__3cJop",datesWrap:"DealItem_datesWrap__kORdC",dates:"DealItem_dates__y-vrO",board:"DealItem_board__3VJfT",hotel:"DealItem_hotel__28JMe",rating:"DealItem_rating__1PBG_",hotelName:"DealItem_hotelName__37NYn",reviewScore:"DealItem_reviewScore__2nc_o",detailsButton:"DealItem_detailsButton__2M8yy",moreOffers:"DealItem_moreOffers__1Jeot",details:"DealItem_details__3qVvB",detailsDate:"DealItem_detailsDate__2RtCY",plane:"DealItem_plane__l4iqa",detailsTime:"DealItem_detailsTime__2YB-h",detailsLanding:"DealItem_detailsLanding__3XEKC",detailsHour:"DealItem_detailsHour__3mExq",line:"DealItem_line__2b6cN",reservation:"DealItem_reservation__ZGPOL",makeReservation:"DealItem_makeReservation__1mAzU",price:"DealItem_price__1l-Bs",priceWrap:"DealItem_priceWrap__1qyfU",orangeStar:"DealItem_orangeStar__3GdzK",greyStar:"DealItem_greyStar__5jSkI",sticky:"DealItem_sticky__3zhS5"}},14:function(e,t,a){e.exports={formWrap:"Filter_formWrap__ENCfg",form:"Filter_form__1HTVz",results:"Filter_results__32iM2",inputWrap:"Filter_inputWrap__1SQfc",button:"Filter_button__1B6jc",cityForm:"Filter_cityForm__3Nhe4"}},15:function(e,t,a){e.exports={chipWrap:"style_chipWrap__Exnta",chipContent:"style_chipContent__3Ecys",chip:"style_chip__110tV",chipLabel:"style_chipLabel__3rZ7S"}},17:function(e,t,a){e.exports={App:"App_App__3bDxu",title:"App_title__28Y6X"}},18:function(e,t,a){e.exports={loading:"styles_loading__1kKjp",loadingMobile:"styles_loadingMobile__3IX27",loadingDesktop:"styles_loadingDesktop__2MA_8"}},2:function(e,t,a){e.exports={wrapper:"style_wrapper__10wTO",label:"style_label__2IG4i",activeLabel:"style_activeLabel__FfH7Y",optionList:"style_optionList__XaP8G",optionListWrapper:"style_optionListWrapper__xg1g-",optionListShadow:"style_optionListShadow__2rvTj",optionListItem:"style_optionListItem__IVAAf",optionListItemActive:"style_optionListItemActive__3ae_3",optionListHeader:"style_optionListHeader__38sW0",optionListButtons:"style_optionListButtons__1-e2n",starsWrap:"style_starsWrap__3aS_0",active:"style_active__3tt3Q",button:"style_button__2rVAA",buttonOutline:"style_buttonOutline__23DHS",square:"style_square__1O0wL",searchInput:"style_searchInput__1QPjM",yearsSelect:"style_yearsSelect__38k-T",yearsWrap:"style_yearsWrap__3gVLd",yearList:"style_yearList__1grYj",yearItem:"style_yearItem__2kW6w",right:"style_right__2jxhW",left:"style_left__1ltCn"}},22:function(e,t,a){e.exports={information:"DealsList_information__3YZz8",list:"DealsList_list__1I6DG"}},28:function(e,t,a){e.exports=a(40)},33:function(e,t,a){},40:function(e,t,a){"use strict";a.r(t);var n=a(0),l=a.n(n),r=a(25),i=a.n(r),c=(a(33),a(11)),s=a(9),o=a(3),u=a(4),m=a(12),f=a.n(m),d=a(6),h=a(17),p=a.n(h),v=a(14),_=a.n(v),b=a(2),E=a.n(b);function g(e,t){return void 0!==t?window.Translator.trans(e,t):window.Translator.trans(e)}var y=function(e){var t=e.position,a=e.label,r=(e.options,e.handleChange),i=(e.defaultValue,e.showSearch),c=(e.activeFirst,e.value),s=e.showVariants,m=e.setShowVariants,f=Object(n.useState)(c),d=Object(u.a)(f,2),h=d[0],p=d[1],v=Object(n.useState)(""),_=Object(u.a)(v,2),b=_[0],y=_[1];Object(n.useEffect)((function(){p(c)}),[c]);var N=Object(n.useRef)(null);return l.a.createElement("div",{className:E.a.wrapper},l.a.createElement("div",{ref:N,className:"".concat(E.a.label," ").concat(s||c.filter((function(e){return e.active})).length>0?E.a.activeLabel:null),onClick:function(){N.current.scrollIntoView({block:"nearest",inline:"center",behavior:"smooth"}),m(!s)}},a),s?l.a.createElement("div",{className:"".concat(E.a.optionListWrapper," ").concat("right"===t?E.a.right:"")},l.a.createElement("div",{className:E.a.optionListHeader},l.a.createElement("span",null,a)," ",l.a.createElement("span",{onClick:function(){r(h.map((function(e){return Object(o.a)({},e,{active:!1})}))),p(h.map((function(e){return Object(o.a)({},e,{active:!1})}))),m(!1)}},g("deals.filter.clearAll"))),i?l.a.createElement("input",{className:E.a.searchInput,type:"text",value:b,onChange:function(e){return y(e.target.value)},placeholder:"Search and select cities for filter"}):null,l.a.createElement("ul",{className:E.a.optionList},h.filter((function(e){return e.label.toLowerCase().includes(b.toLowerCase())})).map((function(e){var t,a=e.value,n=e.label,r=e.active;return l.a.createElement("li",{key:a,className:E.a.optionListItem,onClick:(t=a,function(){p((function(e){return e.map((function(e){return e.value!==t?e:Object(o.a)({},e,{active:!e.active})}))}))})},r?l.a.createElement("div",{className:E.a.optionListItemActive},l.a.createElement("i",{className:"fa fa-check-square","aria-hidden":"true"})):l.a.createElement("div",{className:E.a.square}),l.a.createElement("span",{className:r?E.a.active:""},n))}))),l.a.createElement("div",{className:E.a.optionListButtons},l.a.createElement("button",{className:"".concat(E.a.button," ").concat(E.a.buttonOutline),onClick:function(){return m(!1)}},g("deals.filter.cancel")),l.a.createElement("button",{className:E.a.button,onClick:function(){r(h),m(!1)}},g("deals.filter.done"))),l.a.createElement("div",{className:E.a.optionListShadow,onClick:function(){return m(!1)}})):null)},N=function(e){e.position;var t=e.label,a=e.handleChange,r=(e.defaultValue,e.showSearch,e.value),i=e.showVariants,c=e.setShowVariants,s=Object(n.useState)(r),m=Object(u.a)(s,2),f=m[0],d=m[1];Object(n.useEffect)((function(){d(r)}),[r]);var h=Object(n.useRef)(null);return l.a.createElement("div",{className:E.a.wrapper},l.a.createElement("div",{ref:h,className:"".concat(E.a.label," ").concat(i||r.filter((function(e){return e.active})).length>0?E.a.activeLabel:null),onClick:function(){h.current.scrollIntoView({block:"nearest",inline:"center",behavior:"smooth"}),c(!i)}},t),i?l.a.createElement("div",{className:E.a.optionListWrapper},l.a.createElement("div",{className:E.a.optionListHeader},l.a.createElement("span",null,t)," ",l.a.createElement("span",{onClick:function(){a(f.map((function(e){return Object(o.a)({},e,{active:!1})}))),d(f.map((function(e){return Object(o.a)({},e,{active:!1})}))),c(!1)}},g("deals.filter.clearAll"))),l.a.createElement("ul",{className:E.a.optionList},f.map((function(e){var t,a=e.value,n=e.label,r=e.active;return l.a.createElement("li",{key:a,className:E.a.optionListItem,onClick:(t=a,function(){d((function(e){return e.map((function(e){return e.value!==t?e:Object(o.a)({},e,{active:!e.active})}))}))})},r?l.a.createElement("div",{className:E.a.optionListItemActive},l.a.createElement("i",{className:"fa fa-check-square","aria-hidden":"true"})):l.a.createElement("div",{className:E.a.square}),l.a.createElement("span",{className:r?E.a.active:""},n))}))),l.a.createElement("div",{className:E.a.optionListButtons},l.a.createElement("button",{className:"".concat(E.a.button," ").concat(E.a.buttonOutline),onClick:function(){return c(!1)}},g("deals.filter.cancel")),l.a.createElement("button",{className:E.a.button,onClick:function(){a(f),c(!1)}},g("deals.filter.done"))),l.a.createElement("div",{className:E.a.optionListShadow,onClick:function(){return c(!1)}})):null)},w=function(e){e.position;var t=e.label,a=e.handleChange,r=(e.defaultValue,e.showSearch),i=(e.activeFirst,e.value),c=e.showVariants,s=e.setShowVariants,m=e.hash,f=e.initialRoute,h=e.handleFilterByCity,p=Object(n.useState)(i),v=Object(u.a)(p,2),_=v[0],b=v[1],y=Object(n.useState)(""),N=Object(u.a)(y,2),w=N[0],O=N[1],j=Object(d.f)();Object(n.useEffect)((function(){b(i)}),[i]);var D=Object(n.useRef)(null);return l.a.createElement("div",{className:E.a.wrapper},l.a.createElement("div",{ref:D,className:"".concat(E.a.label," ").concat(c||i.filter((function(e){return e.active})).length>0?E.a.activeLabel:null),onClick:function(){D.current.scrollIntoView({block:"nearest",inline:"center",behavior:"smooth"}),s(!c)}},t),c?l.a.createElement("div",{className:E.a.optionListWrapper},l.a.createElement("div",{className:E.a.optionListHeader},l.a.createElement("span",null,t)," ",l.a.createElement("span",{onClick:function(){a(_.map((function(e){return Object(o.a)({},e,{active:!1})}))),b(_.map((function(e){return Object(o.a)({},e,{active:!1})}))),s(!1)}},g("deals.filter.clearAll"))),r?l.a.createElement("input",{className:E.a.searchInput,type:"text",value:w,onChange:function(e){return O(e.target.value)},placeholder:g("deals.filter.placeholderCities")}):null,l.a.createElement("ul",{className:E.a.optionList},_.filter((function(e){return e.label.toLowerCase().includes(w.toLowerCase())})).map((function(e){var t,a=e.value,n=e.label,r=e.active;return l.a.createElement("li",{key:a,className:E.a.optionListItem,onClick:(t=a,function(){b((function(e){return e.map((function(e){return e.value!==t?e:Object(o.a)({},e,{active:!e.active})}))}))})},r?l.a.createElement("div",{className:E.a.optionListItemActive},l.a.createElement("i",{className:"fa fa-check-square","aria-hidden":"true"})):l.a.createElement("div",{className:E.a.square}),l.a.createElement("span",{className:r?E.a.active:""},n))}))),l.a.createElement("div",{className:E.a.optionListButtons},l.a.createElement("button",{className:"".concat(E.a.button," ").concat(E.a.buttonOutline),onClick:function(){return s(!1)}},g("deals.filter.cancel")),l.a.createElement("button",{className:E.a.button,onClick:function(){if(s(!1),1===_.filter((function(e){return e.active})).length){var e=_.filter((function(e){return e.active}))[0];console.log(e),console.log(h),h(e.value)();var t="/"===f.slice(-1)?"".concat(f).concat(e.value).concat(m):"".concat(f,"/").concat(e.value).concat(m);return j.push(t),null}a(_)}},g("deals.filter.done"))),l.a.createElement("div",{className:E.a.optionListShadow,onClick:function(){return s(!1)}})):null)},O=function(e){var t=e.filters,a=e.setFilters,r=e.countDeals,i=e.hash,c=e.initialRoute,m=e.showCity,f=e.showLocationTheme,d=e.handleFilterByCity,h=Object(n.useRef)(null),p=function(e){return function(t){a((function(a){return Object(o.a)({},a,Object(s.a)({},e,t))}))}},v={cities:!1,airports:!1,themes:!1,hotelStars:!1,dates:!1,nights:!1,preferedVacation:!1,hotelRating:!1},b=Object(n.useState)(v),E=Object(u.a)(b,2),O=E[0],j=E[1],D=function(e){return function(t){j(Object(o.a)({},v,Object(s.a)({},e,t)))}};Object(n.useEffect)((function(){function e(e){h.current&&!h.current.contains(e.target)&&j(v)}return document.addEventListener("mousedown",e),function(){document.removeEventListener("mousedown",e)}}),[v]);return l.a.createElement("div",{className:_.a.formWrap,ref:h},l.a.createElement("form",{className:m?_.a.form:"".concat(_.a.form," ").concat(_.a.cityForm),onSubmit:function(e){return e.preventDefault()}},l.a.createElement("div",{className:_.a.inputWrap},0!==t.cities.length&&m?l.a.createElement(w,{handleChange:p("cities"),label:g("deals.filter.cities"),value:t.cities,showSearch:!0,setShowVariants:D("cities"),showVariants:O.cities,initialRoute:c,hash:i,handleFilterByCity:d}):null,t.airports.length<2?null:l.a.createElement(y,{handleChange:p("airports"),label:g("deals.filter.airport"),value:t.airports,setShowVariants:D("airports"),showVariants:O.airports}),0!==t.themes.length&&f?l.a.createElement(y,{handleChange:p("themes"),label:g("deals.filter.locationTheme"),value:t.themes,setShowVariants:D("themes"),showVariants:O.themes}):null,l.a.createElement(y,{handleChange:p("hotelStars"),label:g("deals.filter.stars"),value:t.hotelStars,setShowVariants:D("hotelStars"),showVariants:O.hotelStars}),l.a.createElement(N,{handleChange:p("dates"),label:g("deals.filter.monthOfTheYear"),value:t.dates,setShowVariants:D("dates"),showVariants:O.dates}),l.a.createElement(y,{handleChange:p("nights"),label:g("deals.filter.nights"),value:t.nights,activeFirst:!0,setShowVariants:D("nights"),showVariants:O.nights}),0===t.preferedVacation.length?null:l.a.createElement(y,{handleChange:p("preferedVacation"),label:g("deals.filter.when"),value:t.preferedVacation,setShowVariants:D("preferedVacation"),showVariants:O.preferedVacation,position:"right"}),l.a.createElement(y,{handleChange:p("hotelRating"),label:g("deals.filter.ratings"),value:t.hotelRating,position:"right",setShowVariants:D("hotelRating"),showVariants:O.hotelRating})),l.a.createElement("div",{className:_.a.results},l.a.createElement("span",null,g("deals.filter.available")),l.a.createElement("span",null,g("deals.filter.results")," ",r))))},j=a(15),D=a.n(j),I=function(e){var t=e.list,a=e.show,n=e.chipLabel,r=e.handleDelete;return a?l.a.createElement("div",{className:D.a.chip},t.filter((function(e){return e.active})).map((function(e){var t=e.value,a=e.label;return l.a.createElement("div",{key:t,className:D.a.chipLabel,onClick:function(){return r(t)}},a," ",l.a.createElement("i",{className:"fa fa-times","aria-hidden":"true"}))})),l.a.createElement("span",null,n)):null},C=function(e){var t=e.filters,a=e.setFilters,n=(e.initialFilters,e.hash),r=e.initialRoute,i=e.resetFilters,c=t.nights,u=t.hotelRating,m=t.preferedVacation,f=t.hotelStars,h=t.cities,p=t.dates,v=t.themes,_=t.airports,b=Object(d.f)(),E=function(e){return function(t){a((function(a){if("from"===e)return Object(o.a)({},a,Object(s.a)({},e,{year:a.from.year,months:a.from.months.map((function(e){return e.value===t?Object(o.a)({},e,{active:!e.active}):e}))}));var l=a[e].map((function(e){return e.value===t?Object(o.a)({},e,{active:!e.active}):e}));if("cities"===e&&0===l.filter((function(e){return e.active})).length){var i="".concat(r).concat(n);b.push(i)}if("cities"===e&&1===l.filter((function(e){return e.active})).length){var c=l.filter((function(e){return e.active}))[0],u="/"===r.slice(-1)?"".concat(r).concat(c.value).concat(n):"".concat(r,"/").concat(c.value).concat(n);b.push(u)}return Object(o.a)({},a,Object(s.a)({},e,l))}))}},y=!1;for(var N in t)y=0!==t[N].filter((function(e){return e.active})).length||y;return l.a.createElement("div",{className:D.a.chipWrap},l.a.createElement("div",{className:D.a.chipContent},y?l.a.createElement("div",{className:D.a.chip},l.a.createElement("div",{className:D.a.chipLabel,onClick:function(){var e="".concat(r).concat(n);b.push(e),i()}},g("deals.chips.clearAll")," ",l.a.createElement("i",{className:"fa fa-times","aria-hidden":"true"}))):null,l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.cities")),list:h,show:0!==h.filter((function(e){return e.active})).length,handleDelete:E("cities")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.nights")),list:c,show:0!==c.filter((function(e){return e.active})).length,handleDelete:E("nights")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.theme")),list:v,show:0!==v.filter((function(e){return e.active})).length,handleDelete:E("themes")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.preferedVacation")),list:m,show:0!==m.filter((function(e){return e.active})).length,handleDelete:E("preferedVacation")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.hotelStars")),list:f,show:0!==f.filter((function(e){return e.active})).length,handleDelete:E("hotelStars")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.airports")),list:_,show:0!==_.filter((function(e){return e.active})).length,handleDelete:E("airports")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.dates")),list:p,show:0!==p.filter((function(e){return e.active})).length,handleDelete:E("dates")}),l.a.createElement(I,{chipLabel:":".concat(g("deals.chips.hotelRating")),list:u,show:0!==u.filter((function(e){return e.active})).length,handleDelete:E("hotelRating")})))},L=a(1),k=a.n(L);function S(e,t){var a,n,l,r,i,c,s;switch(s=parseInt(Math.floor(e/1e3)),c=parseInt(Math.floor(s/60)),i=parseInt(Math.floor(c/60)),a=parseInt(Math.floor(i/24)),r=parseInt(s%60),l=parseInt(c%60),n=parseInt(i%24),t){case"s":return s;case"m":return c;case"h":return i;case"d":return a;default:return{d:a,h:n,m:l,s:r}}}var F={translatedMonths:[g("deals.months.January"),g("deals.months.February"),g("deals.months.March"),g("deals.months.April"),g("deals.months.May"),g("deals.months.June"),g("deals.months.July"),g("deals.months.August"),g("deals.months.September"),g("deals.months.October"),g("deals.months.November"),g("deals.months.December")],translatedDays:[g("deals.months.Sunday"),g("deals.months.Monday"),g("deals.months.Tuesday"),g("deals.months.Wednesday"),g("deals.months.Thursday"),g("deals.months.Friday"),g("deals.months.Saturday")]},V=function(e){var t=e.deal,a=Object(n.useState)(!1),r=Object(u.a)(a,2),i=(r[0],r[1],t.hotelData),c=t.flightData,s=t.dealData;c||((c={}).default_inbound={});for(var o=c,m=(o.takeoff_date,o.takeoff_hour),f=o.landing_hour,d=(o.landing_date,o.travel_duration_format),h=o.default_inbound,p=o.nb_escales,v=o.city_from_airport_code,_=o.city_to_airport_code,b=(o.comp_logo,o.comp_path,c.default_inbound),E=(b.takeoff_date,b.takeoff_hour),y=b.landing_hour,N=(b.landing_date,b.travel_duration_format),w=b.city_from_airport_code,O=b.city_to_airport_code,j=(b.comp_logo,b.comp_path,s.outboundDate),D=s.inboundDate,I=s.price,C=i.rating,L=i.name,V=i.trustYouReviews,W=i.board,M=[],R=1;R<=5;R++)R<=C?M.push(l.a.createElement("div",{className:k.a.orangeStar,key:R},l.a.createElement("i",{className:"fa fa-star"}))):M.push(l.a.createElement("div",{className:k.a.greyStar,key:R},l.a.createElement("i",{className:"fa fa-star"})));var A=function(e){return new Date(+e[2],+e[1]-1,+e[0])},x=A(j.split("/")),B=A(D.split("/")),T=S(B-x,"d"),Y=("".concat(x.getDate(),". ").concat(F.translatedMonths[x.getMonth()]," ").concat(x.getFullYear()),"".concat(B.getDate(),". ").concat(F.translatedMonths[B.getMonth()]," ").concat(B.getFullYear()),F.translatedDays[x.getDay()]),q=F.translatedDays[B.getDay()];return console.log(W),l.a.createElement(l.a.Fragment,null,l.a.createElement("div",{className:k.a.content},l.a.createElement("div",{className:k.a.contentWrap},l.a.createElement("div",{className:k.a.hotelInformation},l.a.createElement("div",{className:k.a.datesWrap},l.a.createElement("span",null,l.a.createElement("span",{className:k.a.dayNames},Y,"-",q,","),T," ",g("deals.dealContent.nights")),l.a.createElement("p",{className:k.a.dates},j," - ",D)),l.a.createElement("div",{className:k.a.board},l.a.createElement("span",null,g("deals.dealContent.board.".concat(W))),l.a.createElement("i",{className:"fa fa-bed ".concat(k.a.hotel),"aria-hidden":"true"})),l.a.createElement("div",{className:k.a.rating},M.reverse()),l.a.createElement("span",{className:k.a.hotelName},L),l.a.createElement("div",{className:k.a.reviewScore},5===V.reviewScore?l.a.createElement("span",null,g("deals.dealContent.best")):4===V.reviewScore?l.a.createElement("span",null,g("deals.dealContent.excelent")):l.a.createElement("span",null,g("deals.dealContent.good"))," ",l.a.createElement("span",null,"(",V.reviewCount," ",g("deals.dealContent.reviews"),")")," ",l.a.createElement("span",null,V.reviewScore,"/5")))),1===Object.values(c).length?null:l.a.createElement("div",{className:k.a.details},l.a.createElement("i",{className:"fa fa-plane ".concat(k.a.plane),"aria-hidden":"true"}),l.a.createElement("div",{className:k.a.detailsDate},l.a.createElement("span",null,g("deals.dealContent.outboundFlight"))),l.a.createElement("div",{className:k.a.detailsTime},l.a.createElement("div",{className:k.a.detailsLanding},l.a.createElement("span",null,f," (",_,")")),l.a.createElement("div",{className:k.a.detailsHour},l.a.createElement("span",null,d.toLowerCase(),"m"),l.a.createElement("div",null,l.a.createElement("i",{className:"fa fa-map-marker","aria-hidden":"true"}),l.a.createElement("div",{className:k.a.line}),l.a.createElement("i",{className:"fa fa-sort-desc","aria-hidden":"true"})),l.a.createElement("span",null,0===+p?g("deals.dealContent.directFlight"):"".concat(+p," ").concat(g("deals.dealContent.stops")))),l.a.createElement("div",{className:k.a.detailsLanding},l.a.createElement("span",null,m," (",v,")"))),l.a.createElement("div",{className:k.a.detailsDate},l.a.createElement("span",null,g("deals.dealContent.inboundFlight"))),l.a.createElement("div",{className:k.a.detailsTime},l.a.createElement("div",{className:k.a.detailsLanding},l.a.createElement("span",null,y," (",w,")")),l.a.createElement("div",{className:k.a.detailsHour},l.a.createElement("span",null,N.toLowerCase(),"m"),l.a.createElement("div",null,l.a.createElement("i",{className:"fa fa-map-marker","aria-hidden":"true"}),l.a.createElement("div",{className:k.a.line}),l.a.createElement("i",{className:"fa fa-sort-desc","aria-hidden":"true"})),l.a.createElement("span",null,0===+h.nb_escales?g("deals.dealContent.directFlight"):"".concat(+p," ").concat(g("deals.dealContent.stops")))),l.a.createElement("div",{className:k.a.detailsLanding},l.a.createElement("span",null,E," (",O,")")))),l.a.createElement("div",{className:k.a.reservation},l.a.createElement("a",{target:"_blank",rel:"noopener noreferrer",href:"https://"+s.packageDeeplinkUrl,className:k.a.makeReservation},g("deals.dealContent.reservation")),l.a.createElement("div",{className:k.a.price},l.a.createElement("span",null,g("deals.dealContent.from")),l.a.createElement("div",{className:k.a.priceWrap},l.a.createElement("span",null,g("deals.dealContent.perPerson")),l.a.createElement("span",null,"$",I))))))},W=function(e){var t=e.deals,a=e.hash,n=e.initialRoute,r=e.handleFilterByCity,i=e.scrollToApp,s=t.cityPhoto,o=t.cityName,u=t.cityId,m="/"===n.slice(-1)?"".concat(n).concat(u).concat(a):"".concat(n,"/").concat(u).concat(a);return l.a.createElement("div",{className:k.a.wrapper},l.a.createElement("div",{className:k.a.sticky},l.a.createElement("img",{src:s,alt:"city",className:k.a.image}),l.a.createElement(c.b,{to:m,className:k.a.caption_link,onClick:r(u)},l.a.createElement("div",{className:k.a.blurWrapper},l.a.createElement("div",{className:k.a.blur},l.a.createElement("img",{src:s,alt:"city",className:k.a.blurImage}))),l.a.createElement("p",{className:k.a.caption},o,l.a.createElement("span",{className:k.a.location},l.a.createElement("i",{className:"fa fa-map-marker"}))),l.a.createElement("div",{className:k.a.wrapperCaption},l.a.createElement("span",null,t.deals.length)," ",g("deals.dealItem.deals")))),l.a.createElement("div",{className:k.a.contentList},t.deals.slice(0,3).map((function(e,t){return l.a.createElement(V,{key:e.dealData.dealId,deal:e})}))),t.deals.length>3?l.a.createElement(c.b,{to:m,className:k.a.moreOffers,onClick:function(){i(),r(u)()}},g("deals.dealItem.moreOffers")):"")},M=function(e){return e.deals.deals.map((function(e,t){var a=e.hotelData,n=e.dealData,r=a.name,i=a.default_img;return l.a.createElement("div",{key:t,className:k.a.wrapper},l.a.createElement("img",{src:i.url_medium,alt:"hotel photo",className:k.a.image}),l.a.createElement("a",{target:"_blank",rel:"noopener noreferrer",href:"https://"+n.packageDeeplinkUrl,className:k.a.caption_link},l.a.createElement("div",{className:k.a.blurWrapper},l.a.createElement("div",{className:k.a.blur},l.a.createElement("img",{src:i.url_medium,alt:"hotel photo",className:k.a.blurImage}))),l.a.createElement("p",{className:k.a.caption},l.a.createElement("span",null," ",r),l.a.createElement("span",{className:k.a.location},l.a.createElement("i",{className:"fa fa-map-marker"})))),l.a.createElement("div",{className:k.a.contentList},l.a.createElement(V,{deal:e})))}))},R=a(22),A=a.n(R),x=function(e){var t=e.scrollToApp,a=e.deals,n=e.cityDeal,r=e.hash,i=e.initialRoute,c=e.handleFilterByCity;return l.a.createElement("div",{className:A.a.list},0===a.length?l.a.createElement("h5",{className:A.a.information},g("deals.dealList.noFlights"),"."):a.map((function(e,a){return n?l.a.createElement(M,{key:a,deals:e}):l.a.createElement(W,{scrollToApp:t,handleFilterByCity:c,initialRoute:i,key:a,deals:e,hash:r})})))};var B=function(e){var t=e.deals,a=Object(d.h)().city,n=t.filter((function(e){return a.split("-").some((function(t){return+t===e.cityId}))}));return l.a.createElement("div",null,n.length>0?l.a.createElement("h3",{className:p.a.title},g("deals.cityDeals.resultFor")," ",n[0].cityName):null,l.a.createElement(x,{deals:n,cityDeal:!0}))},T=a(18),Y=a.n(T),q=function(){return l.a.createElement("div",{className:Y.a.loading},l.a.createElement("img",{className:Y.a.loadingDesktop,src:"https://d16tr0byigrcd.cloudfront.net/images/package-loader.gif",alt:"loading"}),l.a.createElement("img",{className:Y.a.loadingMobile,src:"https://d16tr0byigrcd.cloudfront.net/images/package-loader.gif",alt:"loading"}))};var H=Object(d.i)((function(){var e=Object(n.useState)([]),t=Object(u.a)(e,2),a=t[0],r=t[1],i=Object(n.useState)([]),m=Object(u.a)(i,2),h=m[0],v=m[1],_=Object(n.useState)([]),b=Object(u.a)(_,2),E=b[0],g=b[1],y=Object(n.useState)(!0),N=Object(u.a)(y,2),w=N[0],j=N[1],D=Object(d.f)(),I=Object(d.g)(),L={nights:[{value:2,label:"2+",active:!1},{value:3,label:"3+",active:!1},{value:4,label:"4+",active:!1},{value:5,label:"5+",active:!1},{value:6,label:"6+",active:!1},{value:7,label:"7",active:!1}],hotelRating:[{value:3,label:"3+",active:!1},{value:4,label:"4+",active:!1},{value:5,label:"5+",active:!1}],preferedVacation:[],hotelStars:[{value:3,label:"3+",active:!1},{value:4,label:"4+",active:!1},{value:5,label:"5+",active:!1}],cities:[],dates:[],themes:[],airports:[]},k=window.location.pathname,V=k.split("/");parseInt(V[V.length-1])&&(k=V.slice(0,V.length-1).join("/")||"/"),k="/"===k.slice(-1)?k:k+"/";var W=Object(n.useState)(k),M=Object(u.a)(W,2),R=M[0],A=(M[1],Object(n.useState)(L)),T=Object(u.a)(A,2),Y=T[0],H=T[1],J=Object(n.useState)(I.hash),G=Object(u.a)(J,2),P=G[0],z=G[1],U=Object(n.useState)(0),X=Object(u.a)(U,2),K=X[0],Q=X[1],Z=Object(n.useState)(!0),$=Object(u.a)(Z,2),ee=$[0],te=$[1],ae=Object(n.useRef)(null),ne=function(e){return function(){H((function(t){return Object(o.a)({},t,{cities:t.cities.map((function(t){var a=t.value,n=t.label;return a===e?{label:n,active:!0,value:a}:{label:n,active:!1,value:a}}))})}))}},le=function(){H((function(e){var t={};for(var a in e)"from"!==a?t[a]=e[a].map((function(e){return Object(o.a)({},e,{active:!1})})):t.from={year:L.from.year,months:L.from.months.map((function(e){return Object(o.a)({},e,{active:!1})}))};return t}))};return Object(n.useEffect)((function(){fetch("./api.php").then((function(e){return e.json()})).then((function(e){v(e.specialDates),r(e.items),j(!1)}))}),[]),Object(n.useEffect)((function(){if(0!==a.length){var e=a.filter((function(e){if(0===Y.themes.filter((function(e){return e.active})).length)return e;var t=e.themes,a=[];for(var n in t)a.push({value:+n,label:t[n]});return Y.themes.filter((function(e){return e.active})).every((function(e){var t=e.value;return a.some((function(e){return e.value===t}))}))})).map((function(e){return Object(o.a)({},e,{deals:e.deals.filter((function(e){if(0===Y.airports.filter((function(e){return e.active})).length)return e;var t=e.flightData.city_from_airport_code;return Y.airports.filter((function(e){return e.active})).some((function(e){var a=e.value;return t===a}))}))})})).map((function(e){return Object(o.a)({},e,{deals:e.deals.filter((function(e){var t=e.hotelData;return 0===Y.hotelStars.filter((function(e){return e.active})).length?e:Y.hotelStars.filter((function(e){return e.active})).some((function(e){return e.value<=t.rating}))}))})})).map((function(e){return Object(o.a)({},e,{deals:e.deals.filter((function(e){var t=e.hotelData;return 0===Y.hotelRating.filter((function(e){return e.active})).length?e:Y.hotelRating.filter((function(e){return e.active})).some((function(e){return e.value<=t.trustYouReviews.reviewScore}))}))})})).map((function(e){return Object(o.a)({},e,{deals:e.deals.filter((function(e){if(0===Y.nights.filter((function(e){return e.active})).length)return e;var t=e.dealData,a=t.outboundDate,n=t.inboundDate,l=function(e){return new Date(+e[2],+e[1]-1,+e[0])},r=l(a.split("/")),i=S(l(n.split("/"))-r,"d");return Y.nights.filter((function(e){return e.active})).some((function(e){return e.value<=i}))}))})})).filter((function(e){return 0===Y.cities.filter((function(e){return e.active})).length?e:Y.cities.filter((function(e){return e.active})).some((function(t){return t.value===e.cityId}))})).map((function(e){return Object(o.a)({},e,{deals:e.deals.filter((function(e){if(0===Y.preferedVacation.filter((function(e){return e.active})).length)return e;var t=e.dealData,a=t.outboundDate,n=(t.inboundDate,function(e){return new Date(+e[2],+e[1]-1,+e[0])}),l=n(a.split("/"));return Y.preferedVacation.filter((function(e){return e.active})).some((function(e){var t=e.from_date,a=e.to_date,r=n(a.split("/")),i=n(t.split("/"));return f()(l)<f()(r)&&f()(l)>f()(i)}))}))})})).map((function(e){return Object(o.a)({},e,{deals:e.deals.filter((function(e){var t,a=e.dealData.outboundDate,n=(t=a.split("/"),new Date(+t[2],+t[1]-1,+t[0]));return Y.dates.some((function(e){e.label;var t=e.value,a=e.active;if(0===Y.dates.filter((function(e){return e.active})).length)return!0;if(a){var l=f()(t);return l.format("MMMM")===f()(n).format("MMMM")&&l.format("YYYY")===f()(n).format("YYYY")}}))}))})})).filter((function(e){return e.deals.length>0}));g(e)}}),[Y,a]),Object(n.useEffect)((function(){console.log("hash",I.hash);var e=a.map((function(e){var t=e.cityName;return{value:e.cityId,label:t,active:!1}})),t=a.map((function(e){return e.deals})).flat().filter((function(e){return e.flightData})).map((function(e){var t=e.flightData;return{value:t.city_from_airport_code,label:t.city_from_airport}})),n=[],l=new Map,r=!0,i=!1,c=void 0;try{for(var u,m=t[Symbol.iterator]();!(r=(u=m.next()).done);r=!0){var f=u.value;l.has(f.value)||(l.set(f.value,!0),n.push({value:f.value,label:f.label,active:!1}))}}catch(M){i=!0,c=M}finally{try{r||null==m.return||m.return()}finally{if(i)throw c}}var d=a.map((function(e){return e.deals})).flat().map((function(e){var t,a=e.dealData.outboundDate,n=(t=a.split("/"),new Date(+t[2],+t[1]-1,+t[0]));n.setDate(1);var l="".concat(F.translatedMonths[n.getMonth()],", ").concat(n.getFullYear());return{value:n,label:l=l.charAt(0).toUpperCase()+l.slice(1)}})).sort((function(e,t){return e.value-t.value})),p=[],v=new Map,_=!0,b=!1,E=void 0;try{for(var g,y=d[Symbol.iterator]();!(_=(g=y.next()).done);_=!0){var N=g.value;v.has(N.label)||(v.set(N.label,!0),p.push({value:N.value,label:N.label,active:!1}))}}catch(M){b=!0,E=M}finally{try{_||null==y.return||y.return()}finally{if(b)throw E}}var w=a.map((function(e){return e.themes})),O=[];w.forEach((function(e){var t=function(t){if(O.some((function(e){return e.value===+t})))return{v:void 0};O.push({value:+t,label:e[t],active:!1})};for(var a in e){var n=t(a);if("object"===typeof n)return n.v}}));var j=h.map((function(e){var t=e.name,a=e.from_date,n=e.to_date;return{label:t,active:!1,from_date:a,to_date:n,value:a+n}})),D={themes:O,cities:e,airports:n,dates:p,preferedVacation:j};if(!I.hash)return H(Object(o.a)({},L,{},D));var C=I.hash.slice(1).split("&").reduce((function(e,t){var a=t.split("=");return Object(o.a)({},e,Object(s.a)({},a[0],a[1].split(",")))}),{}),k={},S=Object(o.a)({},Y,{},D),V=function(e){var t=S[e],a=C[e];if(C.hasOwnProperty(e)){if("dates"===e)return k[e]=t.map((function(e){return a.some((function(t){return+e.value===+t}))?Object(o.a)({},e,{active:!0}):e})),"continue";if(isNaN(+a[0]))return k[e]=t.map((function(e){return a.some((function(t){return e.value===t}))?Object(o.a)({},e,{active:!0}):e})),"continue";k[e]=t.map((function(e){return a.some((function(t){return e.value===+t}))?Object(o.a)({},e,{active:!0}):e}))}};for(var W in S)V(W);console.log("url to filters",C,k),H(Object(o.a)({},Y,{},D,{},k))}),[a]),Object(n.useEffect)((function(){if(0!==Y.cities.length){var e="#";for(var t in Y)"dates"!==t?Y[t].length>0&&Y[t].filter((function(e){return e.active})).length>0&&(e="".concat(e).concat(t,"=").concat(Y[t].filter((function(e){return e.active})).map((function(e){return e.value})).join(","),"&")):Y[t].filter((function(e){return e.active})).length>0&&(e="".concat(e,"dates=").concat(Y[t].filter((function(e){return e.active})).map((function(e){return+e.value})).join(","),"&"));if(e=e.slice(0,e.length-1),1===Y.cities.filter((function(e){return e.active})))return null;z(e)}}),[Y]),Object(n.useEffect)((function(){if(console.log("changed hash"),1===Y.cities.filter((function(e){return e.active})).length){var e=Y.cities.filter((function(e){return e.active}))[0],t="/"===R.slice(-1)?"".concat(R).concat(e.value).concat(P):"".concat(R,"/").concat(e.value).concat(P);window.history.pushState("","",t)}else if(0===Y.cities.filter((function(e){return e.active})).length){if(ee)return te(!1);var a="".concat(R).concat(P);window.history.pushState("","",a)}else setTimeout((function(){return window.history.pushState("","",I.pathname+P)}),5)}),[P]),window.onpopstate=function(e){D.push(R),console.log("change",I.hash);var t=a.map((function(e){var t=e.cityName;return{value:e.cityId,label:t,active:!1}})),n=a.map((function(e){return e.deals})).flat().filter((function(e){return e.flightData})).map((function(e){var t=e.flightData;return{value:t.city_from_airport_code,label:t.city_from_airport}})),l=[],r=new Map,i=!0,c=!1,u=void 0;try{for(var m,f=n[Symbol.iterator]();!(i=(m=f.next()).done);i=!0){var d=m.value;r.has(d.value)||(r.set(d.value,!0),l.push({value:d.value,label:d.label,active:!1}))}}catch(x){c=!0,u=x}finally{try{i||null==f.return||f.return()}finally{if(c)throw u}}var p=a.map((function(e){return e.deals})).flat().map((function(e){var t,a=e.dealData.outboundDate,n=(t=a.split("/"),new Date(+t[2],+t[1]-1,+t[0]));n.setDate(1);var l="".concat(F.translatedMonths[n.getMonth()],", ").concat(n.getFullYear());return{value:n,label:l=l.charAt(0).toUpperCase()+l.slice(1)}})).sort((function(e,t){return e.value-t.value})),v=[],_=new Map,b=!0,E=!1,g=void 0;try{for(var y,N=p[Symbol.iterator]();!(b=(y=N.next()).done);b=!0){var w=y.value;_.has(w.label)||(_.set(w.label,!0),v.push({value:w.value,label:w.label,active:!1}))}}catch(x){E=!0,g=x}finally{try{b||null==N.return||N.return()}finally{if(E)throw g}}var O=a.map((function(e){return e.themes})),j=[];O.forEach((function(e){var t=function(t){if(j.some((function(e){return e.value===+t})))return{v:void 0};j.push({value:+t,label:e[t],active:!1})};for(var a in e){var n=t(a);if("object"===typeof n)return n.v}}));var C=h.map((function(e){var t=e.name,a=e.from_date,n=e.to_date;return{label:t,active:!1,from_date:a,to_date:n,value:a+n}})),k={themes:j,cities:t,airports:l,dates:v,preferedVacation:C};if(!I.hash)return H(Object(o.a)({},L,{},k));console.log(Object(o.a)({},L,{},k),!I.hash);var S=I.hash.slice(1).split("&").reduce((function(e,t){var a=t.split("=");return Object(o.a)({},e,Object(s.a)({},a[0],a[1].split(",")))}),{}),V={},W=Object(o.a)({},Y,{},k),M=function(e){var t=W[e],a=S[e];if(S.hasOwnProperty(e)){if("dates"===e)return V[e]=t.map((function(e){return a.some((function(t){return+e.value===+t}))?Object(o.a)({},e,{active:!0}):e})),"continue";if(isNaN(+a[0]))return V[e]=t.map((function(e){return a.some((function(t){return e.value===t}))?Object(o.a)({},e,{active:!0}):e})),"continue";V[e]=t.map((function(e){return a.some((function(t){return e.value===+t}))?Object(o.a)({},e,{active:!0}):e}))}};for(var A in W)M(A);console.log(K===Object.keys(S).length,K,Object.keys(S).length),K!==Object.keys(S).length||P.includes("cities")||window.history.back(),Q(Object.keys(S).length),H(Object(o.a)({},L,{},k,{},V))},l.a.createElement("div",{className:p.a.App,ref:ae},l.a.createElement(c.a,null,l.a.createElement(d.c,null,l.a.createElement(d.a,{path:R,exact:!0},l.a.createElement(l.a.Fragment,null,l.a.createElement(O,{countDeals:E.reduce((function(e,t){return t.deals.length+e}),0),filters:Y,setFilters:H,initialRoute:R,hash:P,showCity:!0,showLocationTheme:!0,handleFilterByCity:ne}),w?l.a.createElement(q,null):l.a.createElement(l.a.Fragment,null,l.a.createElement(C,{initialRoute:R,hash:P,filters:Y,initialFilters:L,setFilters:H,resetFilters:le}),l.a.createElement(x,{handleFilterByCity:ne,scrollToApp:function(){ae.current.scrollIntoView({block:"start",behavior:"smooth"})},initialRoute:R,deals:E,hash:P})))),l.a.createElement(d.a,{path:R+":city"},l.a.createElement(l.a.Fragment,null,l.a.createElement(O,{countDeals:E.reduce((function(e,t){return t.deals.length+e}),0),filters:Y,setFilters:H,initialRoute:R,hash:P,showCity:!1,showLocationTheme:!1}),w?l.a.createElement(q,null):l.a.createElement(l.a.Fragment,null,l.a.createElement(C,{initialRoute:R,hash:P,filters:Y,initialFilters:L,setFilters:H,resetFilters:le}),l.a.createElement(B,{deals:E})))))))}));i.a.render(l.a.createElement(c.a,null,l.a.createElement(H,null)),document.getElementById("dealsapp"))}},[[28,1,2]]]);
//# sourceMappingURL=main.7113d8f7.chunk.js.map