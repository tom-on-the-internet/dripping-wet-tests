# Dripping Wet Tests

A repo used to show why DRY tests aren't good.

## What is DRY?

Dry stands for Do not Repeat Yourself. It's a good programming principle. It emphasizes the importance of having a single source of truth for your code.

## What is wrong with DRY in tests?

Test code is different than application code.

Application code is constantly changed, extended, recombined and refactored. The ever-changing nature of application code is why DRY is so important when writing application code.

Test code is rarely changed or refactored, and should never be extended or recombined. Writing DRY test code is optimizing for the wrong thing. It is harder to understand and to delete test code.

## So test code should be wet?

Yes. It should be dripping.

Test code should be easy to read at the expense of being repetitive.

Test code is almost always revisited in the case of a failing test. When this happens, you want to be able to reason about the individual test. You don't want to compile the entire test class in your head. And, you definitely don't want a change to one test to impact other tests.
