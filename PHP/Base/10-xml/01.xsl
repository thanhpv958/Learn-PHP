<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/book">  <!-- match sẽ lấy hết toàn bộ file xml -->
        <html>
            <head>
                <title>XSL</title>
            </head>
            <body>
                <ul>
                    <li>Tên khóa học: <xsl:value-of select="title" /></li>
                    <li>Tác giả: <xsl:value-of select="author" /></li>
                    <xsl:if test="weight &gt; 400">
                        <li>
                            Trọng lượng: <xsl:value-of select="weight" />
                                         <xsl:value-of select="weight/@units" />
                        </li>
                    </xsl:if>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>