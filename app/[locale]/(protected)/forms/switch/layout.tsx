import { Metadata } from "next";

export const metadata: Metadata = {
  title: "FVSTUDIOS Next Js",
  description: "FVSTUDIOS is a popular dashboard template.",
};
const Layout = ({ children }: { children: React.ReactNode }) => {
  return <>{children}</>;
};

export default Layout;
