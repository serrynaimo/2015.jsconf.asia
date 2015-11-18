$(document).ready(function() {

  var tl = new TimelineMax({
    repeat: -1,
    repeatDelay: 2
  });

  var $mainSponsors = $('.sponsors__main .sponsor');
  var $otherSponsors = $('.sponsors__others .sponsor');
  var $otherSponsorsFirstSet = $otherSponsors.slice(0, 8);
  var $otherSponsorsSecondSet = $otherSponsors.slice(8);
  var $logo = $('.logo');

  var heartBeatEase = BezierEasing(0, 0, 0, 1.74);
  var heartBeatEndEase = BezierEasing(0, 0, 0, 2);

  // Initialize
  TweenMax.set($otherSponsorsFirstSet, {
    opacity: 0,
    scale: 0.97
  });

  TweenMax.set($otherSponsorsSecondSet, {
    opacity: 0,
    scale: 0.97
  });

  TweenMax.set($mainSponsors, {
    scale: 0.97
  });

  function heartBeat($elem) {
    var heartBeat = new TimelineMax();
    heartBeat
      .to($elem, 0.15, {
        scale: 1.03,
        ease: heartBeatEase
      })
      .to($elem, 0.2, {
        scale: 0.97,
        ease: heartBeatEase
      })
      .to($elem, 0.2, {
        scale: 1,
        ease: heartBeatEase
      });

    if ($elem === $mainSponsors || $elem === $logo) {
      heartBeat.to($elem, 0.2, {
        scale: 0.97,
        ease: heartBeatEase
      });
    } else {
      heartBeat.to($elem, 0.5, {
          opacity: 0,
          scale: 0,
          // ease: Power0.easeOut
          ease: heartBeatEndEase
        })
        .set($elem, {
          scale: 0.97
        });
    }

    return heartBeat;
  }

  function showOtherSponsors($elem) {
    return new TimelineMax()
      .staggerTo($elem, 2, {
        opacity: 1,
      }, 1);
  }

  function logoBeat() {
    var logoBeat = new TimelineMax({
      repeatDelay: 1.5,
      repeat: 3
    });

    logoBeat.add(heartBeat($logo));

    return logoBeat;
  }

  tl
    .set($logo, {
      scale: 0.97
    }) // Doubly ensure logo scale is correct. 
    .add(heartBeat($mainSponsors))
    .add(heartBeat($mainSponsors), '+=1.5')
    // Main out
    .to($mainSponsors, 1, {
      opacity: 0,
      ease: heartBeatEndEase
    }, '=+1.5')
    .addLabel('mainComplete')
    .add(showOtherSponsors($otherSponsorsFirstSet))
    .add(heartBeat($otherSponsorsFirstSet))
    .add(logoBeat(), 'mainComplete+=0.5')
    .addLabel('firstSetComplete')
    .add(showOtherSponsors($otherSponsorsSecondSet))
    .add(heartBeat($otherSponsorsSecondSet))
    .add(logoBeat(), 'firstSetComplete+=0.5')
    .addLabel('secondSetComplete')
    .to($mainSponsors, 1, {
      opacity: 1,
      ease: heartBeatEndEase
    });
});
