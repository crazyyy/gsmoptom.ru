DG=window.DG||{},DG.WebApi=DG.WebApi||{},DG.apitracker=DG.WebApi.Tracker=function(){function t(t){var e=l.statsHost+"?v="+l.statsRequestVersion;"object"==typeof t&&("bc"===t.type&&t.url&&(e=t.url),"object"==typeof t.fields&&(e=r(e,t.fields)),s(e))}function e(t,e){void 0!==e&&(t+="&place="+e),s(t)}function r(t,e){for(var r in e)e.hasOwnProperty(r)&&(t+="&"+r+"="+e[r]);return t}function n(t,e,r){var n=l.statsHost+"?v="+l.statsRequestVersion+"&hash="+t;void 0!==e&&(n+="&place="+e),void 0!==r&&(n+="&branch_id="+r),n+="&action=reg_impression",s(n)}function o(t,e){var r=l.statsHost+"?v="+l.statsRequestVersion+"&poi_id="+t+"&api_key="+e;s(r)}function i(){var t=window.screen&&screen.width&&screen.width>10;return!t}function s(t){i()||("https:"==window.location.protocol&&(t=t.replace(/^http:/,"https:")),d.push(t),a())}function a(){f||(f=!0,c())}function c(){var t=d.shift();if(!t)return void(f=!1);var e=document.createElement("script");e.async=!0,e.id=u,e.src=t,e.onerror=e.onload=p,document.body.appendChild(e)}function p(){var t=document.getElementById(u);t&&t.parentNode&&(t.onerror=t.onload=null,t.parentNode.removeChild(t)),setTimeout(c,0)}var u="_bcri_script",d=[],f=!1,l={statsHost:"http://stat.api.2gis.ru",statsRequestVersion:"2.0"};return{regBC:e,regUrl:t,regImpression:n,regPOIImpression:o}}();
//# sourceMappingURL=maps/apitracker-light.js.map