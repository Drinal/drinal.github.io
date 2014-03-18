'use strict';

var monstercat = angular.module('monstercat', []);

monstercat.controller('ReleaseBar', ['$scope', function (scope) {
  scope.opened = false;
  scope.count = 0;

  scope.format = 'M/d/yy h:mm:ss a';

  scope.toggleOpen = function () {
    scope.opened = !scope.opened;
  }
}]);

// monstercat.controller('MenuBar', ['$scope', function (scope) {
//   scope.menuOpen = false;
// }]);

// monstercat.directive('menuBar', function () {
//   return function (scope, element, attrs) {
//     scope.$watch('menuOpen', function (open) {
//       if (open) {
//         element.addClass('open');
//       } else {
//         element.removeClass('open');
//       }
//     });
//   };
// });

// monstercat.directive('menuToggle', function () {
//   return function (scope, element, attrs) {
//     element.bind('click', function () {
//       scope.menuOpen = !scope.menuOpen;
//       scope.$digest();
//     });
//   };
// });

monstercat.directive('releaseBar', function () {
  return function (scope, element, attrs) {
    scope.$watch('count', function (count) {
      if (count > 0) {
        element.css('display', 'block');
      } else {
        element.css('display', 'none');
      }
    });
  };
});

monstercat.directive('releaseItem', function () {
  return function (scope, element, attrs) {
    scope.count += 1;
    element.bind('click', function () {
      scope.opened = true;
      scope.releaseName = attrs.releaseName;
      scope.releaseLink = attrs.releaseLink;
      scope.releaseBeatport = attrs.releaseBeatport;
      scope.releaseBandcamp = attrs.releaseBandcamp;
      scope.releaseItunes = attrs.releaseItunes;
      scope.releaseSpotify = attrs.releaseSpotify;
      if (scope.player) {
        $.scPlayer.stopAll();
        scope.player = $('#sc-container .sc-player').scPlayer({
          links: [{
            url: attrs.releaseLink,
            title: attrs.releaseName}],
          autoPlay: true
        });
      } else {
        scope.player = $('#sc-container .sc-player-init').scPlayer({
          links: [{
            url: attrs.releaseLink,
            title: attrs.releaseName}],
          autoPlay: true
        });
      }
      scope.$digest();
    });
  };
});

monstercat.directive('releaseDrawer', function () {
  return function (scope, element, attrs) {
    scope.$watch('opened', function (opened) {
      if (opened) {
        element.css('max-height', '1000px');
      } else {
        element.css('max-height', '0');
      }
    });
  };
});
