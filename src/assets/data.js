// JSON containing information for site including:
// Education, Work experience, skills, certifications, site settings

export let data = {
    resume_section: "",
    bio:
        "I am a second year computer engineering student studying at McMaster University in Hamilton, Ontario. I am an avid developer who creates fluid layouts and efficient code.",

    dark_mode: false,
    show_contact: false,
    show_dropdown: false,

    resume_elements: {
        education: {
            name: "education",
            icon: ["fas", "graduation-cap"],
            display_props: {
                expand: true,
                timeline: true
            },

            elements: [
                {
                    name: "McMaster University",
                    dates: "2019 - Present",
                    description: "Computer Engineering <br/>(co-op)",
                    image: "mcmaster.jpg",
                    points: [
                        {
                            title: "Course Highlights 2020",
                            content:
                                "<span class='bold_text'>Principles of Programming</span><ul class='expand_list'><li>Learned C and Java by designing and implementing programs.</li><li>Studied the structure and uses of low and high level languages.</li></ul><hr/><span class='bold_text'>Logic Design</span><ul class='expand_list'><li>Analysed the operation of logic gates and combinational, and sequential circuits.</li><li>Designed and tested logic using Verilog HDL.</li></ul>"
                        },
                        {
                            title: "Club - McMaster Formula Electric",
                            content:
                                "<p><a href='https://macformularacing.com/' target='_blank'>MAC Formula Electric</a> is a student run team working on designing and fabricating an electric 1/4 scale formula style racecar.<br/><br/>I am apart of the software and controls team which works on implementing the various digital systems across the vehicle using technologies such as CAN.</p><hr/><span class='bold_text'>Projects</span><ul class='expand_list'><li>Developing a customizable dashboard interface using interpreted CAN bus information.</li></ul>"
                        },
                        {
                            title: "Course Highlights 2019",
                            content:
                                "<span class='bold_text'>Engineering Computation</span><ul class='expand_list'><li>Analysed and implemented algorithms in Python</li><li>Studied best practices and methods of development</li></ul><hr/><span class='bold_text'>Engineering Profession & Practice</span><ul class='expand_list'><li>Developed strong interpersonal and team building skills.</li><li>Studied the ethics and expectations of working in a professional setting.</li></ul>"
                        }
                    ],
                    location: "Hamilton, ON",
                    accent: "rgba(202 , 111, 0, .2)"
                },
                {
                    name: "William Lyon Mackenzie",
                    dates: "2019 - Present",
                    location: "Toronto, ON",
                    description: "MaCS (Math and Computer Science)<br/>OSSD",
                    points: [
                        {
                            title: "Course Highlights",
                            content:
                                "<span class='bold_text'>Computer Engineering Technology</span><ul class='expand_list'><li>Studied and applied CISCO IT training in small scale simulations.</li><li>Developed low level programs for 8085 microprocessors.</li></ul><hr/><span class='bold_text'>Introduction to Computer Science</span><ul class='expand_list'><li>Worked in teams to develop full stack software in Java.</li><li>Studied computer science theory at the AP level.</li></ul>"
                        }
                    ],
                    image: "wlmac.jpg",
                    accent: "rgba(0,0,0,0)"
                }
            ]
        },

        "work experience": {
            name: "work experience",
            icon: ["fas", "briefcase"],
            display_props: {
                timeline: true,
                expand: true
            },

            elements: [
                {
                    name: "McMaster University",
                    dates: "2020 - Present",
                    description: "<b>Web and Desktop Applications Assistant</b><br/>Office of the Registrar",
                    points: [
                        {
                            title: "Responsibilities",
                            content:
                                "<ul class='expand_list'><li>Provide remote support for users in a variety of hardware and software environments.</li><li>Work with members of the department to solve and thoroughly document issues as they arise.</li><li>Perform maintenance on user and backend systems.</li></ul>"
                        }
                    ],
                    image: "mcmaster2.jpg",
                    location: "Hamilton, ON",
                    accent: "rgba(202 , 111, 0, .2)"
                },
                {
                    name: "McMaster University",
                    dates: "2020",
                    description: "<b>Information Technology Assistant</b><br/>Housing and Conference Services",
                    points: [
                        {
                            title: "Responsibilities",
                            content:
                                "<ul class='expand_list'><li>Provided individual and group support for users in a variety of production environments.</li><li>Troubleshooted computer systems using a priority ticketing system.</li><li>Performed maintenance on customer systems including disk imaging, virus removal, and hardware upgrades.</ul>"
                        }
                    ],
                    image: "mcmaster.jpg",
                    location: "Hamilton, ON",
                    accent: "rgba(202 , 111, 0, .2)"
                },
                {
                    name: "Camp Kawartha",
                    dates: "2018 - 2020",
                    description: "<b>Head of Ropes & Lifeguard</b>",
                    location: "Douro-Dummer, ON",
                    image: "ck.JPG",
                    points: [
                        {
                            title: "Responsibilities",
                            content:
                                "<ul class='expand_list'><li>Planned, communicated, and led group activities.</li><li>Worked in a team to ensure the safe operation of the waterfront and ropes areas.</li></ul>"
                        }
                    ],
                    accent: "rgba(0,0,0,0)"
                }
            ]
        },

        certifications: {
            name: "certifications",
            icon: ["fas", "award"],
            size: "half",
            display_props: {
                timeline: false,
                size: "half",
                expand: false
            },
            elements: [
                {
                    name: "CISCO IT Essentials",
                    dates: "2020",
                    image: "keyboard.jpg",
                    accent: "rgba(21 , 73, 91, .2)"
                },
                {
                    name:
                        "FIT Network Systems and Operations with Industry Certificate",
                    dates: "2019",
                    image: "network.jpg",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "FIT Software Design and Development",
                    dates: "2019",
                    image: "programming.jpeg",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Standard First Aid and CPR/AED Level C",
                    dates: "2018",
                    image: "aed.jpeg",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "WHMIS",
                    dates: "2018",
                    image: "whmis.jpg",
                    accent: "rgba(0,0,0,0)"
                }
            ]
        },
        skills: {
            name: "skills",
            icon: ["fas", "pencil-alt"],
            display_props: {
                timeline: false,
                size: "slim",
                expand: false
            },
            elements: [
                {
                    name: "HTML",
                    dates: "★ ★ ★ ★ ★",
                    image: "html5.jpg",
                    accent: "rgba(21 , 73, 91, .2)"
                },
                {
                    name: "CSS",
                    dates: "★ ★ ★ ★ ☆",
                    image: "css3.jpeg",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "JavaScript",
                    dates: "★ ★ ★ ★ ☆",
                    image: "javascript.jpeg",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Python",
                    dates: "★ ★ ★ ☆ ☆",
                    image: "python.jpg",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Java",
                    image: "java.jpg",
                    dates: "★ ★ ★ ★ ☆",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Microsoft Office",
                    image: "office.jpeg",
                    dates: "★ ★ ★ ★ ★",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Google GSuite",
                    image: "gsuite.jpeg",
                    dates: "★ ★ ★ ★ ★",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Autodesk Inventor",
                    image: "inventor.jpg",
                    dates: "★ ★ ★ ☆ ☆",
                    accent: "rgba(0,0,0,0)"
                },
                {
                    name: "Vue JS",
                    image: "vue.jpg",
                    dates: "★ ★ ☆ ☆ ☆",
                    accent: "rgba(0,0,0,0)"
                }
            ]
        }
    }
}