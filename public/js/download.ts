const nav = document.getElementById('nav') as HTMLElement;
const navBurger = document.getElementById('nav-burger') as HTMLButtonElement;
const navLinks = document.getElementById('nav-links') as HTMLElement;

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

navBurger.addEventListener('click', () => {
    navBurger.classList.toggle('active');
    navLinks.classList.toggle('open');
});

const navLinksItems = navLinks.querySelectorAll('a');
navLinksItems.forEach(link => {
    link.addEventListener('click', () => {
        navBurger.classList.remove('active');
        navLinks.classList.remove('open');
    });
});

document.addEventListener('click', (e) => {
    const target = e.target as HTMLElement;

    if (!nav.contains(target) && navLinks.classList.contains('open')){
        navBurger.classList.remove('active');
        navLinks.classList.remove('open');
    }
});

const tabButtons = document.querySelectorAll('.server-tab-btn') as NodeListOf<HTMLButtonElement>;
const tabContents = document.querySelectorAll('.server-tab-content') as NodeListOf<HTMLElement>;

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        const targetTab = button.getAttribute('data-tab');

        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        button.classList.add('active');
        const targetContent = document.querySelector(`.server-tab-content[data-content="${targetTab}"]`) as HTMLElement;

        if (targetContent)
            targetContent.classList.add('active');
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        // @ts-ignore
        const href = this.getAttribute('href');
        if (href && href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const offsetTop = (target as HTMLElement).offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    });
});


const codeBlocks = document.querySelectorAll('.code-block');

codeBlocks.forEach(block => {
    block.addEventListener('mouseenter', () => {
        if (!block.querySelector('.copy-btn')) {
            const copyBtn = document.createElement('button');
            copyBtn.className = 'copy-btn';
            copyBtn.innerHTML = 'Copy';
            copyBtn.style.cssText = `
                position: absolute;
                top: 10px;
                right: 10px;
                padding: 6px 12px;
                font-size: 11px;
                background: rgba(145, 167, 255, 0.1);
                border: 1px solid #91a7ff;
                border-radius: 4px;
                color: #91a7ff;
                cursor: pointer;
                font-family: 'DM Mono', monospace;
                transition: all 0.2s;
            `;

            const parent = block.parentElement;
            if (parent && parent.classList.contains('code-card')) {
                parent.style.position = 'relative';
                parent.appendChild(copyBtn);

                // @ts-ignore
                copyBtn.addEventListener('click', async () => {
                    const code = block.querySelector('code')?.textContent || '';
                    try {
                        await navigator.clipboard.writeText(code);
                        copyBtn.innerHTML = 'Copied!';
                        copyBtn.style.background = 'rgba(105, 219, 124, 0.1)';
                        copyBtn.style.borderColor = '#69db7c';
                        copyBtn.style.color = '#69db7c';

                        setTimeout(() => {
                            copyBtn.innerHTML = 'Copy';
                            copyBtn.style.background = 'rgba(145, 167, 255, 0.1)';
                            copyBtn.style.borderColor = '#91a7ff';
                            copyBtn.style.color = '#91a7ff';
                        }, 2000);
                    } catch (err) {
                        console.error('Failed to copy:', err);
                    }
                });
            }
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
    if (window.scrollY > 50)
        nav.classList.add('scrolled');
});