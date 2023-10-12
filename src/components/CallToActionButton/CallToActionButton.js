import { Link } from "gatsby";
import React from "react";

export const CallToActionButton = ({ label, destination }) => {
  return (
    <Link
      to={destination}
      className="inline-block cursor-pointer rounded-sm bg-yellow-500 px-4 py-2 font-bold uppercase !text-black no-underline transition-colors hover:bg-yellow-400"
    >
      {label}
    </Link>
  );
};
