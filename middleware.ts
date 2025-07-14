import { NextResponse } from 'next/server';
import type { NextRequest } from 'next/server';
import { defaultLocale } from '@/config';

export function middleware(request: NextRequest) {
  const { pathname } = request.nextUrl;
  const locale = request.nextUrl.locale || defaultLocale;

  // Redirect root URL to default locale
  if (pathname === "/") {
    return NextResponse.redirect(new URL(`/${locale}`, request.url));
  }

  return NextResponse.next();
}

export const config = {
  matcher: [
    "/((?!_next|api|static|favicon.ico).*)",
  ],
};
