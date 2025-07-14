import {defineRouting} from 'next-intl/routing';
import {createNavigation} from 'next-intl/navigation';
import {locales, defaultLocale} from '@/config';

export const routing = defineRouting({
  locales,
  defaultLocale,
});

// Lightweight wrappers around Next.js' navigation APIs
export const {Link, redirect, usePathname, useRouter} =
  createNavigation({ locales, defaultLocale });