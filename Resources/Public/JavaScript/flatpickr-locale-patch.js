/*
 * Registers the custom locale "en-X-GNZ" (Gen Z Speak)
 * as an alias for the English "en" locale in flatpickr.
 *
 * flatpickr only knows standard locale codes like "de", "en", etc.
 * TYPO3 sets document.documentElement.lang to the full locale name,
 * which flatpickr then tries to look up. This patch ensures flatpickr
 * finds a valid locale configuration for our custom locale.
 */
import flatpickr from 'flatpickr';

if (flatpickr.l10ns.en && !flatpickr.l10ns['en-X-GNZ']) {
    flatpickr.l10ns['en-X-GNZ'] = flatpickr.l10ns.en;
}
