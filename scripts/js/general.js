// *==============================================================================
// ** Imported  **
// *==============================================================================

import { addMenuListener, simpleFadeUp, simpleFadeRight, scrollTriggerRefresh } from './animations';
import { cookieWarning, consoleGreeting, currentNav } from './utils';

// *=========================================
// ** Imports  **
// *=========================================

// ********** Animations **********
addMenuListener();
simpleFadeUp();
simpleFadeRight();
scrollTriggerRefresh();

// ********** Utils **********
cookieWarning();
consoleGreeting();
currentNav();
