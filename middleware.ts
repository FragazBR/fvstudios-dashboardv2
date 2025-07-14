import createMiddleware from 'next-intl/middleware';
import { NextRequest } from 'next/server';
import { locales, defaultLocale } from '@/config';

export default function middleware(request: NextRequest) {
  const handleI18nRouting = createMiddleware({
    locales,
    defaultLocale
  });

  const response = handleI18nRouting(request);

  // Define o idioma no header para acesso global
  response.headers.set('fvstudios-locale', request.headers.get('fvstudios-locale') || defaultLocale);

  return response;
}

export const config = {
  // Match only internationalized pathnames
  matcher: ['/', '/(br|en)/:path*']
};
