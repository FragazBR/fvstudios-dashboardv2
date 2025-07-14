"use client";

import { useTranslations } from "next-intl";

const Layout = ({ children }: { children: React.ReactNode }) => {
  const t = useTranslations("CalendarApp");
  return (
    <>
      <title>{t("pageTitle")}</title>
      {children}
    </>
  );
};

export default Layout;
