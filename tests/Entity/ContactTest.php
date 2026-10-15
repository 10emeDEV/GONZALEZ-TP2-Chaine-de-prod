<?php

namespace App\Tests\Entity;

use App\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    public function testNewContactHasNoId(): void
    {
        $this->assertNull((new Contact())->getId());
    }

    public function testSettersAndGetters(): void
    {
        $createdAt = new \DateTimeImmutable();

        $contact = (new Contact())
            ->setFirstName('John')
            ->setName('Doe')
            ->setMessage('Test message')
            ->setCreatedAt($createdAt)
            ->setStatus('new');

        $this->assertSame('John', $contact->getFirstName());
        $this->assertSame('Doe', $contact->getName());
        $this->assertSame('Test message', $contact->getMessage());
        $this->assertSame($createdAt, $contact->getCreatedAt());
        $this->assertSame('new', $contact->getStatus());
    }
}
