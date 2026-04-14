# gen_z - Gen Z Speak for TYPO3

This TYPO3 extension registers a custom language **"Gen Z Speak"** (`en-X-GNZ`)
and translates all labels in the TYPO3 backend into American Gen-Z internet slang. No cap!

## The Problem

The TYPO3 backend is professional, functional and... boring. Where's the rizz?
Where's the aura? Why does it say "Delete" instead of "Yeet"? Why "Cancel" instead
of "Nvm bestie"? And why does it say "Disabled" when "Ghosted" hits so much harder?

This extension fixes that problem once and for all. Fr fr.

## What it does

- Registers the new locale `en-X-GNZ` as a standalone backend language
- Overrides 7,000+ labels from all 35 system extensions
- Uses `en` (English) as fallback if a label is not translated
- English date formats are preserved (BCP 47 private-use subtag based on `en`)
- The original English language remains completely untouched

## Highlights

| Before | After |
|--------|-------|
| OK | Slay! |
| Yes | Bet! |
| No | Nah fam |
| Cancel | Nvm bestie |
| Delete | Yeet it |
| Edit | Glow up |
| Save and close | Save and dip |
| Search | Stalk |
| Login | Slide in |
| Logout | Peace out |
| Enabled | It's giving active |
| Disabled | Ghosted |
| Print | Print on dead trees |
| More | Give me more bestie |
| Please confirm | You sure about this fr fr? |
| Error | Oof, big L |
| Success | W, aura +100! |
| Warning | Red flag! |
| Standard | Mid |
| Admin | Sigma Admin |
| User groups | The squad |
| History | Caught in 4K |

## Installation

```bash
composer req bmack/gen-z
```

Alternatively, copy the `gen_z` folder to `typo3conf/ext/` and activate it in the Extension Manager.

## Setup

1. Activate the extension
2. In the backend under **User Settings → Language** select the new language **"Gen Z Speak"**
3. Slay!

## Compatibility

| TYPO3 | PHP | Status |
|-------|-----|--------|
| 14.x  | 8.2+ | Slay |

## Technical Details

The extension uses TYPO3's built-in `resourceOverrides` mechanism to overlay custom XLF
files for the `en-X-GNZ` locale over the original labels. The locale key follows the
BCP 47 standard with a private-use subtag (`x-gnz`), based on `en` (English).
This means `IntlDateFormatter` and other ICU-based functions work correctly with
English formats.

The fallback chain is: `en-X-GNZ` → `en`.

## License

GPL-2.0-or-later. See [LICENSE](LICENSE).

## Credits

Created 2026 by Benni Mack at the TYPO3 SurfCamp.
