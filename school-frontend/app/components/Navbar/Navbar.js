"use client"
import { useState } from "react";
import { FiMenu, FiX } from "react-icons/fi";
export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false);
  return (
    <nav className="bg-white shadow-md">
      <div className="container mx-auto px-4 py-3 flex justify-between items-center">
        <div className="flex items-center">
          <img src="http://localhost:1337/uploads/IMG_20230420_WA_0000_removebg_preview_1_822872d8a0.png" alt="School Logo" className="h-12" />
        </div>
        <ul className="hidden md:flex space-x-8 text-gray-700 font-medium">
          <li className="hover:text-red-500 cursor-pointer">The School</li>
          <li className="hover:text-red-500 cursor-pointer">Academics</li>
          <li className="hover:text-red-500 cursor-pointer">Life @ DBTR</li>
          <li className="hover:text-red-500 cursor-pointer">Contact us</li>
        </ul>
        <div className="hidden md:flex space-x-4">
          <button className="border border-red-500 text-red-500 px-4 py-2 rounded-md hover:bg-red-100">CSR</button>
          <button className="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 flex items-center">Donate</button>
        </div>
        <button onClick={() => setIsOpen(!isOpen)} className="md:hidden text-gray-700">
          {isOpen ? <FiX size={28} /> : <FiMenu size={28} />}
        </button>
      </div>
      {isOpen && (
        <ul className="md:hidden bg-white shadow-md text-center py-4 space-y-4">
          <li className="hover:text-red-500 cursor-pointer">The School</li>
          <li className="hover:text-red-500 cursor-pointer">Academics</li>
          <li className="hover:text-red-500 cursor-pointer">Life @ DBTR</li>
          <li className="hover:text-red-500 cursor-pointer">Contact us</li>
          <li>
            <button className="border border-red-500 text-red-500 px-4 py-2 rounded-md w-full">CSR</button>
          </li>
          <li>
            <button className="bg-red-500 text-white px-4 py-2 rounded-md w-full">Donate ❤️</button>
          </li>
        </ul>
      )}
    </nav>
  );
}
