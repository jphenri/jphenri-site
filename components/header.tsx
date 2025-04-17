"use client"

import { useState } from "react"
import Link from "next/link"
import { Menu, X } from "lucide-react"
import { Button } from "@/components/ui/button"

export default function Header() {
  const [isMenuOpen, setIsMenuOpen] = useState(false)

  return (
    <header className="sticky top-0 z-50 w-full border-b bg-white/80 backdrop-blur-sm">
      <div className="container flex h-16 items-center justify-between px-4 md:px-6">
        <Link href="/" className="flex items-center space-x-2">
          <span className="text-xl font-bold tracking-tight">jphenri.com</span>
        </Link>
        <nav className="hidden md:flex gap-6">
          <Link href="/" className="text-sm font-medium hover:underline underline-offset-4">
            Accueil
          </Link>
          <Link href="/services" className="text-sm font-medium hover:underline underline-offset-4">
            Services
          </Link>
          <Link href="/blog" className="text-sm font-medium hover:underline underline-offset-4">
            Blog
          </Link>
          <Link href="/about" className="text-sm font-medium hover:underline underline-offset-4">
            À propos
          </Link>
          <Link href="/contact" className="text-sm font-medium hover:underline underline-offset-4">
            Contact
          </Link>
        </nav>
        <div className="hidden md:flex">
          <Button className="rounded-full bg-black text-white hover:bg-gray-800">Prendre rendez-vous</Button>
        </div>
        <button className="flex md:hidden" onClick={() => setIsMenuOpen(!isMenuOpen)}>
          {isMenuOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
        </button>
      </div>
      {isMenuOpen && (
        <div className="md:hidden">
          <div className="flex flex-col space-y-4 p-4 bg-white">
            <Link href="/" className="text-sm font-medium" onClick={() => setIsMenuOpen(false)}>
              Accueil
            </Link>
            <Link href="/services" className="text-sm font-medium" onClick={() => setIsMenuOpen(false)}>
              Services
            </Link>
            <Link href="/blog" className="text-sm font-medium" onClick={() => setIsMenuOpen(false)}>
              Blog
            </Link>
            <Link href="/about" className="text-sm font-medium" onClick={() => setIsMenuOpen(false)}>
              À propos
            </Link>
            <Link href="/contact" className="text-sm font-medium" onClick={() => setIsMenuOpen(false)}>
              Contact
            </Link>
            <Button
              className="w-full rounded-full bg-black text-white hover:bg-gray-800"
              onClick={() => setIsMenuOpen(false)}
            >
              Prendre rendez-vous
            </Button>
          </div>
        </div>
      )}
    </header>
  )
}
